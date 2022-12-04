<?php

namespace App\Http\Controllers;

use App\Models\Fiche;
use App\Models\Marque;
use App\Models\Modele;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    //

    public function marques()
    {
        $data =  Marque::all();
        return view('pages.fiches.marques' , ["marques" => $data] );
    }

    

    public function modeles($marque)
    {
       // $data =   Modele::where("marque_id" , $marque);   ->firstOrFail();

        $data = Modele::select('marques.id' , 'marques.logo' , 'marques.title as marque' , 'modeles.title' , 'modeles.slug' ,  'modeles.image')
                        ->leftJoin('marques', 'marques.id', '=', 'modeles.marque_id')
                        ->where('marques.slug', strtolower($marque))
                        ->get();
        return view('pages.fiches.modeles' ,["modeles" => $data , "b_brands" => Marque::all()]);
    }


    public function detail($marque , $modele)
    {

        $data = Fiche::select('fiches.*' , 'marques.logo' , 'marques.title as marque' , 'modeles.title' , 'modeles.slug' ,  'modeles.image')
                        ->leftJoin('marques', 'marques.id', '=', 'fiches.marque_id')
                        ->leftJoin('modeles', 'modeles.id', '=', 'fiches.modele_id')
                        ->where('marques.slug', strtolower($marque))
                        ->where('modeles.slug', strtolower($modele))
                        ->get();
        return view('pages.fiches.detail' ,["fiche" => $data , "b_brands" => Marque::all() ]);

    }


  




}
