<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelPengajuanController extends Controller
{
    public function index () {
        return view('lendus-tabelPengajuandanHistory');
    }
}
