<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Kontak extends Model
{
    use HasFactory;

    public function scopeCurrentUser($query)
    {
        return $query->where('id_user', Auth::user()->id);
    }
}
