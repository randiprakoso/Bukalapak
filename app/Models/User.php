<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'name', 'password', 'address', 'date', 'gander',
 ];

    public $timestamps = true;
}
