<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends controller
{
    public function barang(){
        $barang = barang::get();

        return view('pages.admin.barang', ['barang' => $barang]);
    }
}
