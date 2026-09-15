<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Zahira Adiah Safa',
            'npm' => '2417051012',
            'kelas' => 'B'
        ];

        return view('profile', $data);
    }
}