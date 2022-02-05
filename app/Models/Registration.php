<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;



public function course(){
    return $this->belongTo(Course::class);
}
public function user(){
    return $this->belongTo(User::class);
}




}
