<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        //konek database tanpa model
        // $db = \config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     var_dump($row);
        // }

        $komik = $this->komikModel->findAll();

        $data = [
            'title' => ' Daftar Komik',
            'komik' => $komik
        ];

        return view("komik/index", $data);
    }
}
