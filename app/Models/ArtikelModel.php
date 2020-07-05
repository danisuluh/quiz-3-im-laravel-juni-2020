<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
  public static function get_all(){
    $items = DB::table ('artikels')->get();
    return $items;

  }

  public static function save($data){ //diharapkan datanya nanti dirubah menjadi array assoc
    //hilangkan _token
    unset($data["_token"]);
    $new_pertanyaan = DB::table('artikels')->insert($data); //insert menerima array assoc

    return $new_pertanyaan;
  }

  // public static function save($data){ //diharapkan datanya nanti dirubah menjadi array assoc
  //   //hilangkan _token
  //   unset($data["_token"]);
  //   $new_pertanyaan = DB::table('artikels')->insert($data); //insert menerima array assoc

  //   return $new_pertanyaan;
  // }
}