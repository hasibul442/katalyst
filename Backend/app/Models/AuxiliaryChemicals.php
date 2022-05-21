<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuxiliaryChemicals extends Model
{
    use HasFactory;
    protected $table = 'ausxiliarychemicals';
    protected $fillable = [
        'chemical_name',
        "status"
    ];
}
