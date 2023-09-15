<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_process()
    {
        if (!$this->validate(
            [
                'user_name' => [
                    'rules' => 'required|min_length[5]|max_length[20]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                        'min_length' => '{field} minimal 5 karakter',
                        'max_length' => '{field} maximal 20 karakter'
                    ]
                ],
                'user_username' => [
                    'rules' => 'required|min_length[5]|max_length[20]|is_unique[users.user_username]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                        'min_length' => '{field} minimal 5 karakter',
                        'max_length' => '{field} maximal 20 karakter',
                        'is_unique' => '{field}sudah digunakan'
                    ]

                ],
                'user_pass' => [
                    'rules' => 'required|min_length[8]|max_length[60]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                        'min_length' => '{field} minimal 8 karakter',
                        'max_length' => '{field} maximal 60 karakter'
                    ]
                ],
            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $user = new UsersModel();
        $user->insert(
            [
                'user_name' => $this->request->getVar('user_name'),
                'user_username' => $this->request->getVar('user_username'),
                'user_pass' => password_hash($this->request->getVar('user_pass'), PASSWORD_BCRYPT),
                'user_email' => $this->request->getVar('user_email'),
                'role' => $this->request->getVar('role')

            ]
        );
        return redirect()->to('login');
    }

    public function login_process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('user_username');
        $pass = $this->request->getVar('user_pass');
        $email = $this->request->getVar('user_email');

        $user = $users->where(['user_username' => $username])->first();
        if ($user) {
            if (password_verify($pass, $user['user_pass'])) {
                session()->set([
                    'username' => $user['user_username'],
                    'name' => $user['user_name'],
                    'email' => $user['user_email'],
                    'logged_in' => TRUE,
                    'role' => $user['role']
                ]);
                if ($user['role'] == 'staf'){
                    return redirect()->to('/dashboard');
                } elseif($user['role'] == 'klien') {
                    return redirect()->to('/klien/dashboard');
                } elseif($user['role'] == 'notaris'){
                    return redirect()->to('/notaris/dashboard');
                } else {
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('error', ' Username atau Password Salah 1');

                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password  Salah 2');

            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
    // public function login()
    // {
    //     // Proses login
    //     // ...

    //     if ($authenticated) {
    //         $role = $userData['role']; // Ambil peran dari data pengguna

    //         if ($role === 'staf') {
    //             return redirect()->to('/halaman-staf'); // Ganti dengan rute halaman staf
    //         } elseif ($role === 'klien') {
    //             return redirect()->to('/halaman-klien'); // Ganti dengan rute halaman klien
    //         }
    //     } else {
    //         // Tampilkan pesan error jika login gagal
    //         // ...
    //     }
    // }

}