<?php

use App\Models\Goal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'goals' => Goal::all()
            ->where('created_at', '>=', date('Y-m-d') . ' 00:00:00')
            ->where('user_id', 'like', auth()->id())
    ]);
})->middleware(['auth'])->name('dashboard');

Route::get('/goals/new', function () {
    return view('goals.create');
});

Route::post('/goals/new', function () {
    // Validation?
    $goal = new Goal;
    $goal->create([
        'title' => request()->title,
        'user_id' => auth()->id()
    ]);

    return redirect('dashboard'); // Flash message?
});

Route::post('/goals/{goal}/delete', function ($goal) {
    Goal::find($goal)->delete();

    return redirect('dashboard');
});

require __DIR__ . '/auth.php';
