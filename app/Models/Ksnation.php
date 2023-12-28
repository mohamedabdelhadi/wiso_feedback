<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksnation extends Model
{
    use HasFactory;
    protected $table = "ksnations";
    protected $primaryKey = "n_id";
}
