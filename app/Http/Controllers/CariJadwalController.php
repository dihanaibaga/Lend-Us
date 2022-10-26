<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariJadwalController extends Controller
{
    public function index() {
        return view('lendus-cariJadwal');
    }

}
