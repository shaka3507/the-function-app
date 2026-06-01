<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    //
    use HasFactory;

    protected $fillable = ['attending', 'event', 'user_id', 'plus_one'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
