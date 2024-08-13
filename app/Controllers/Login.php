<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function masuk()
    {
        $session = session();

        // Validasi input
        if (!$this->validate(['email' => 'required', 'password' => 'required'])) {
            return redirect()->back()->withInput()->with('error', 'Email dan password wajib diisi.');
        }

        // Proses login
        $loginModel = new LoginModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $loginModel->where('email', $email)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session user
                $session->set([
                    'user' => $user,
                    'logged_in' => true,
                ]);

                return redirect()->to('profile');
            } else {
                return redirect()->back()->withInput()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Email tidak ditemukan.');
        }
    }
}
