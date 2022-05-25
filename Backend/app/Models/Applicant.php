<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $table = "candidates";
    protected $fillable = ["job_id",'candidate_name','last_degree',
    'mobile_number',
    'email',
    'cv'];
}
