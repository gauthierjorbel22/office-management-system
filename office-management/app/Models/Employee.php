<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'manager_id',
        'name',
        'surname',
        'city',
        'title',
        'salary',
        'project_id',
        'department_id'
    ];
    protected $table = 'Employee';
    public $timestamps = false; //to remove the required created at and updated at 
}
