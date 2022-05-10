<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    use HasFactory;
    protected $table = "machines";
    protected $fillable = ['machine_name',
    'machine_image',
    'description',
    'application',
    "status"];
}
