<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        // Jika user belum login, redirect ke halaman login
        if (!session()->has('user')) {
            return redirect()->to('login');
        }
        $user = session()->get('user');

        $userModel = new UserModel();
        $userData = $userModel->find($user['id']);

        // Pass user data to the view
        return view('profile', ['user' => $userData]);
    }

    public function update()
    {
        // Jika user belum login, redirect ke halaman login
        if (!session()->has('user')) {
            return redirect()->to('login');
        }

        $profileModel = new ProfileModel();

        // Validasi input
        $validationRules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'matches[password]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', 'Silakan lengkapi data dengan benar.');
        }

        // Ambil data dari form
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Update data user
        $profileModel->updateUser($email, ['name' => $name, 'email' => $email, 'password' => $password]);

        // Hapus session user
        session()->remove('user');

        // Redirect dengan pesan sukses
        return redirect()->to('login')->with('success', 'Profil berhasil diperbarui. Silakan login kembali.');
    }

    public function uploadPhoto()
    {
        if (!session()->has('user')) {
            return redirect()->to('login');
        }

        $userId = session()->get('user')['id'];
        $profileModel = new ProfileModel();
        $user = $profileModel->find($userId);

        $file = $this->request->getFile('photo');

        if ($file->isValid() && !$file->hasMoved()) {
            // Simpan nama file lama untuk dihapus nanti
            $oldPhoto = $user['photo'];

            // Pindahkan file baru ke direktori uploads
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);

            // Update user photo in the database
            $profileModel->updatePhoto($userId, $newName);

            // Update session data
            $user['photo'] = $newName;
            session()->set('user', $user);

            // Hapus foto lama jika ada
            if ($oldPhoto && file_exists(ROOTPATH . 'public/uploads/'. $oldPhoto)) {
                unlink(ROOTPATH . 'public/uploads/' . $oldPhoto);
            }

            return redirect()->to('profile')->with('success', 'Foto profil berhasil diperbarui.');
        } else {
            return redirect()->to('profile')->with('error', 'Foto gagal diperbarui.');
        }
    }


    public function logout()
    {
        // Set logged_in session variable to false
        session()->set('logged_in', false);

        // Redirect ke halaman login dengan pesan
        return redirect()->to('login')->with('success', 'Berhasil logout, Silakan login kembali.');
    }

}
