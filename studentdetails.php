<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentdetails extends Model
{
    protected $table = 'studentdetails';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}
