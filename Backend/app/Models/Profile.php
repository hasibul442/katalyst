<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = "companyprofiles";
    protected $fillable = [
        'history',
        'mission',
        'vision',
        'value',
        'phoneno',
        'mobileno1',
        'mobileno2',
        'email',
        'address',
        'address_link'
    ];
}
