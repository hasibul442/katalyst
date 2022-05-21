<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = "messages";
    protected $fillable = ["f_name",
    "l_name",
    "name_of_organization",
    "position",
    "phone_number",
    "email",
    "description"];
}
