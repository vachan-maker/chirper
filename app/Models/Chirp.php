<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    protected $fillable = [
        'messages'
    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }//many to one. Many chirps belong to one user.

}
