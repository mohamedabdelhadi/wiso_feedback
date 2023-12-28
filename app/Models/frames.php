<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frames extends Model
{
    use HasFactory;
    protected $primaryKey = 'f_id';
    protected $fillable = ['f_id', 'fname','status'];   


}
