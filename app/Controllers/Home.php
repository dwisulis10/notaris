<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Home extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }
    public function index()
    {
        
        return view('login');
    }
    public function profil()
    {
        $userData = $this->usersModel->find(session()->get('id'));

        // Menampilkan halaman profile dengan data user
        return view('profil', ['userData' => $userData]);
    }
   
    public function updateProfile()
    {
        $data = [
            'user_name' => $this->request->getPost('user_name'),
            'user_username' => $this->request->getPost('user_username'),
            'user_email' => $this->request->getPost('user_email')
        ];
    
        // Panggil metode updateUser dari UsersModel dengan kondisi where
        $this->usersModel->updateUser(session()->get('id'), $data);
    
        return redirect()->to('profil')->with('success', 'Profile updated successfully');
    }
    
    


}
