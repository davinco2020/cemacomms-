<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class davecrud extends Model
{
    use HasFactory;
   protected $table ='davecruds';
   protected $fillable = [
       'name',
       'age',
       'DOB',
       'address'
       
   ];
}
