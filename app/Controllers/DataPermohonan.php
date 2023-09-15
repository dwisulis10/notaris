<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PermohonanModel;

class DataPermohonan extends BaseController
{
    public function index()
    {
        $model = new PermohonanModel();
        $data['permohonanData'] = $model->findAll();

        return view('data_permohonan', $data);
    }
}
