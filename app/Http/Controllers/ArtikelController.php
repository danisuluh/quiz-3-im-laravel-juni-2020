<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;


class ArtikelController extends Controller
{
    public function index(){
        return view ('items.artikel');
    }

    public function create(){
        return view ('items.form_artikel');
    }
}
