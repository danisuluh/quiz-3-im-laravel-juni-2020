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

    public function detail($id){
        $detail=ArtikelModel::find_by_id($id);
        return view ('items.detail_artikel', compact('detail'));
    }

    public function store (Request $request){
     
        $new_item = ArtikelModel::save($request->all());


        return redirect('artikel');
    }

    public function edit (){
        dd('edit');
    }

    public function update (){
        dd ('update');
    }

    public function delete (){
        dd('delete');
    }
}
