<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // yang tidak boleh diisi oleh user
    protected $nullable = ['tanggal_checkout']; // membuat suatu field boleh tidak di isi
}
