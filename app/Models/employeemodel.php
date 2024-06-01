<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemodel extends Model
{
    use HasFactory;
    protected $table = 'employeetable';

    protected $fillable = [
    'firstname',
    'middlename',
    'lastname',
    'address',
    'country',
    'state',
    'city',
    'zip',
    'age',
    'birthdate',
    'datehired',
    'department',
    'division'
    ];
}
