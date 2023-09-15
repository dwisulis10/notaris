<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KlienModel;

class DataClien extends BaseController
{
    public function index()
    {
        $model = new KlienModel();
        $data['klien'] = $model->findAll();

        return view('data_klien', $data);
    }
}
