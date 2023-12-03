<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cooker extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "cookers";
}
