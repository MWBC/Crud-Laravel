<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContatoController extends Controller{

    public function index(){


     //   echo DB::select("SELECT * FROM Contatos");
        //echo phpinfo();
    }


    public function create(){

        return view('create');
    }
}
