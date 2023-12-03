<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservation extends Model

{
    use SoftDeletes;
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "reservations";
}
