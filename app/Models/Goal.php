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
}
