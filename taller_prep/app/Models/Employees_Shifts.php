<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees_Shifts extends Model
{   
    public $timestamps = false;
    use HasFactory;
    protected $table = 'employees_shifts';
}
