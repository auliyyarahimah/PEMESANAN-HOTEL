<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kamar';
    protected $table = 'kamar';
    protected $fillable = [
        'nama_kamar',
        'jenis_kamar',
        'ukuran_kamar',
        'harga',
    ];

    public function dataTambahanHargaHariIni(){
        return $this->hasOne(Harga_hari_ini::class,'id_kamar');
    }
    
}
