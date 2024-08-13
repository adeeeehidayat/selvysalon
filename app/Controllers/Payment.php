<?php

namespace App\Controllers;

use App\Models\PaketModel;

class Payment extends BaseController
{
    public function index()
    {
        $session = session();
        $data['nama_paket'] = $session->get('nama_paket');
        $data['harga_paket'] = $session->get('harga_paket');

        // Load view payment.php dengan data paket yang dipilih
        return view('payment', $data);
    }
}
