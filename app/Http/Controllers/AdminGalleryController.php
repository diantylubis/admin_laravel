<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    function admingallery(){
        return view('pages/admin/admingallery');
    }
}
