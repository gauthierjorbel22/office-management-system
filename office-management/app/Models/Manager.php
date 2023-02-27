<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'department_id'
    ];
    protected $table = 'Manager';
    public $timestamps = false; //to remove the required created at and updated at 
}
