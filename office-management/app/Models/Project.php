<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'employee_id'
    ];
    protected $table = 'Project';
    public $timestamps = false; //to remove the required created at and updated at 
}
