<?php

namespace App\Controllers;

use App\Models\PaketModel;

class SuccessPayment extends BaseController
{
    public function index(): string
    {
        $session = session();
        $data['nama_paket'] = $session->get('nama_paket');
        $data['harga_paket'] = $session->get('harga_paket');
        $data['jam_kedatangan'] = $session->get('jam_kedatangan');

        // Load view payment.php dengan data paket yang dipilih
        return view('successpayment', $data);
    }

    public function continue()
    {
        // Hapus session sebelumnya
        $session = session();
        $session->remove('nama');
        $session->remove('nama_paket');
        $session->remove('harga_paket');
        $session->remove('jam_kedatangan');

        // Redirect ke halaman lain jika diperlukan
        return redirect()->to(base_url());
    }

}
