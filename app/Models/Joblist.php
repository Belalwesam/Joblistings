<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Joblist extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobTitle',
        'jobArea',
        'jobCategory',
        'exceptedPay',
        'user_id',
    ]; 
    public $timestamps = false;
    public function user() {
        return $this->belongsTo(User::class);
    }
}
