<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table = 'reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $allowedFields = [
        'nama', 'no_hp', 'alamat', 'jam_kedatangan', 
        'nama_paket', 'masalah_rambut', 'request_produk', 
        'request_pegawai', 'created_at', 'id_paket', 'id_pegawai', 'id_produk'
    ];
}
