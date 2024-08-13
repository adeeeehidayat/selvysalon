<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'photo'];

    public function updateUser($email, $data)
    {
        $user = $this->where('email', $email)->first();

        if (!$user) {
            return false; // Tidak ada data yang ditemukan
        }

        return $this->update($user['id'], $data); // Melakukan pembaruan
    }

    public function updatePhoto($id, $photo)
    {
        return $this->update($id, ['photo' => $photo]);
    }

}
