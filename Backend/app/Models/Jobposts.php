<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobposts extends Model
{
    use HasFactory;
    protected $table = "jobposts";
    protected $fillable = ['position_name',
    'vacancy',
    'salary',
    'exprience',
    'application_dead_line',
    'description',
    'status'];
}
