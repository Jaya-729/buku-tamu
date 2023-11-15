<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // yang tidak boleh diisi oleh user
    protected $nullable = ['tanggal_checkout']; // membuat suatu field boleh tidak di isi
    
    public function PetugasCheckin() {
        return $this->belongsTo(User::class , 'petugas_checkin' , 'id');
        // model tamu ini dimiliki oleh user satu user atau satu petugas
    }

    public function PetugasCheckout(){
        return $this->belongsTo(User::class, 'petugas_checkout', 'id');
        // model ini dimiliki oleh user satu user atau satu pengguna
    }
}
