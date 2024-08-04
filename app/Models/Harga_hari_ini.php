<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga_hari_ini extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_hotel';
    protected $table = 'harga_hari_ini';
    protected $fillable = [
        'harga',
        'available_room',
        'tanggal',
        'id_kamar',
    ];

    public $timestamp = false;

    public function kamar(){
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function dataTambahanReservasi(){
        return $this->hasOne(Reservasi::class,'id_hotel');
    }

}
