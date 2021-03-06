<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;

class Goal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsToAlias
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param $myArray
     * @return void
     */
    public function updateArray($myArray)
    {
        foreach ($myArray as $key => $title) {
            $goal = self::find($key);
            if (!strlen($title)) {
                $goal->delete();
            } else {
                $goal->title = $title;
                $goal->save();
            }
        }
    }
}
