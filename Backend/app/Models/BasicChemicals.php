<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicChemicals extends Model
{
    use HasFactory;
    protected $table = 'basicchemicals';
    protected $fillable = [
        'chemical_name',
        'chemical_image',
        'description',
        'application',
        "status",
        "short_description"
    ];
}
