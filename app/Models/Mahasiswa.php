<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $timestamps = true;
    protected $table = "mahasiswa";
    protected $guarded = ['id'];
}