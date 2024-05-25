<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $table = 'tb_stok';

    protected $fillable = [
        'id_gudang',
        'nama_gudang',
        'nama_sepatu',
        'merek',
        'ukuran',
        'warna',
        'harga_beli',
        'harga_jual',
    ];

    public function data(){
        return $this->belongsTo(data::class, 'id');
    }
}
