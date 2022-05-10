<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dyestuffs extends Model
{
    use HasFactory;
    protected $table = "dyestuffs";
    protected $fillable = [
        'dyestuff_name',
        'dyestuff_image',
        'description',
        'application',
        'status'
    ];
}
