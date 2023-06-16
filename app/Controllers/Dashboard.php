<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'BarangayMIS',
            'page_heading' => "BarangayMIS"
        ];

        return view('dashboard', $data);
    }
}
