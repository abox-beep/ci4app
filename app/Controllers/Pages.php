<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Sultoni Rahman'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Sultoni Rahman'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => "Dusun Mekarsari",
                    'kota' => "Bandung"
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => "Dusun Tanjungsari",
                    'kota' => "Bandung"
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
