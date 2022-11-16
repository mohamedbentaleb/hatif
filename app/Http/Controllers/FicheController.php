<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Modele;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    //

    public function marques()
    {
        $data =  Marque::all();
        return view('pages.fiches.marques' , ["fiches" => $data] );
    }

    

    public function modeles(Marque $m)
    {
        $data =   Modele::where("marque_id" , $m); 
      
        return view('pages.fiches.modeles' ,["modeles" => $data]);
    }


  




}
