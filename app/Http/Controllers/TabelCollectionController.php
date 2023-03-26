<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelCollectionController extends Controller
{
    function tabel(){
        return view('pages.admin.admincollection');
    }
}
