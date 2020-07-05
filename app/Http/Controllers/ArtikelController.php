<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;


class ArtikelController extends Controller
{
    public function index(){
        $items = ArtikelModel::get_all(); 
        return view ('items.artikel',compact('items'));
    }

    public function create(){
        return view ('items.form_artikel');
    }

    public function detail(){
        return view ('items.detail_artikel');
    }

    public function store (Request $request){
     
        $new_item = ArtikelModel::save($request->all());


        return redirect('artikel');
    }
}
