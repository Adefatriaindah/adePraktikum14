<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class TentangKami extends BaseController
{


    public function index()
    {

        $data['title']= 'Tentang Kami';
        echo 
        view('tentangkami', $data);
    }
}