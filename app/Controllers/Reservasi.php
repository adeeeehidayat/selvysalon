<?php

namespace App\Controllers;

use App\Models\PaketModel;
use App\Models\ProdukModel;
use App\Models\PegawaiModel;
use App\Models\ReservasiModel;
use CodeIgniter\Controller;

class Reservasi extends Controller
{
    public function index()
    {
        $paketModel = new PaketModel();
        $produkModel = new ProdukModel();
        $pegawaiModel = new PegawaiModel();
        $data['paket'] = $paketModel->findAll();
        $data['produk'] = $produkModel->findAll();
        $data['pegawai'] = $pegawaiModel->findAll();
        return view('reservasi', $data);
    }

    public function simpan()
    {
        $paketModel = new PaketModel();
        $produkModel = new ProdukModel();
        $pegawaiModel = new PegawaiModel();
        $reservasiModel = new ReservasiModel();
        $session = session();

        // Get the selected package name from the POST data
        $namaPaket = $this->request->getPost('nama_paket');
        $requestProduk = $this->request->getPost('request_produk');
        $requestPegawai = $this->request->getPost('request_pegawai');

        // Find the corresponding package in the paket table
        $paket = $paketModel->where('nama_paket', $namaPaket)->first();
        $produk = $produkModel->where('request_produk', $requestProduk)->first();
        $pegawai = $pegawaiModel->where('request_pegawai', $requestPegawai)->first();

        $hargaPaket = $paket['harga'];

        if ($paket) {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'no_hp' => $this->request->getPost('no_hp'),
                'alamat' => $this->request->getPost('alamat'),
                'jam_kedatangan' => $this->request->getPost('jam_kedatangan'),
                'nama_paket' => $this->request->getPost('nama_paket'),
                'masalah_rambut' => $this->request->getPost('masalah_rambut'),
                'request_produk' => $this->request->getPost('request_produk'),
                'request_pegawai' => $this->request->getPost('request_pegawai'),
                'id_paket' => $paket['id_paket'],
                'id_produk' => $produk['id_produk'],
                'id_pegawai' => $pegawai['id_pegawai']
            ];

            $reservasiModel->insert($data);
            
            
            $session->set('nama_paket', $paket['nama_paket']);
            $session->set('harga_paket', $paket['harga']);
            $session->set('jam_kedatangan', $this->request->getPost('jam_kedatangan'));

            return redirect()->to('payment');
        } else {
            return redirect()->to('/reservasi')->with('error', 'Paket tidak ditemukan.');
        }
    }
}