<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo "Ini adalah method index, controller about";
    }

    public function about($nama = "Sultoni Rahman", $umur = 20)
    {
        echo "Halo, nama saya adalah $nama, dan umur saya adalah $umur";
    }
}
