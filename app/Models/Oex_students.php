<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oex_students extends Model
{
    protected $table="oex_students";
    protected $primaryKey="id";
    protected $fillable=['name','email','mobile_no','category','exam','password','status']; 
}
