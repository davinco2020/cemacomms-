<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $fillable= ['fname', 'addr', 'phone', 'date', 'item', 'qty', 'cost', 'tot'];
}
