<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Register extends Model
{
    use HasFactory;
    protected $table='register';
    protected $fillable=['first_name','last_name','email','phone_number','gender','date_of_birth','country','state','city','hobbies','avatar'];
}
