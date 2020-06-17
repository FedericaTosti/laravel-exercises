<?php

namespace App\Http\Controllers;

use App\Pasta;

use Illuminate\Http\Request;

class PastaController extends Controller
{
  public function index() {
    $collection = Pasta::all();

    $lunga = $collection -> where ("tipo", "lunga");
    $corta = $collection -> where ("tipo", "corta");
    $cortissima = $collection -> where ("tipo", "cortissima");

    return view('home', compact("lunga","corta","cortissima"));
  }

  public function showPasta($id) {

    // $cards = config("pasta");
    // $card = $cards[$id-1];      // -1 per far combaciare questo id con la pag del tipo di pasta cliccato e id nell'url, soluzione bruttina e si basa sul database in config


    // meglio usare findOrFail e fa fede al database in phpMyAdmin
    $card = Pasta::findOrFail($id);

    return view('showPasta', compact("card"));
  }
}
