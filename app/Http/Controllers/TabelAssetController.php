<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelAssetController extends Controller
{
    public function index () {
        return view('lendus-tabelAsset');
    }
}
