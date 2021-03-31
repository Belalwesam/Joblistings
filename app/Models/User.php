<?php

namespace App\Models;

use App\Models\Joblist;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'companyName',
        'email',
        'password',
        'address',
    ];
    public $timestamps = false;
    public function joblists() {
        return $this->hasMany(Joblist::class);
    }
}
