@extends('layouts.app')

 
@section('title', 'Fiche technique')




@section('content')
 
<div class="row" >
    
    <div class="col-8" >
  
        <div class="" >
             <img   src="{{ asset('assets/marques/'.$fiche[0]["logo"]) }}" alt="{{  $fiche[0]["marque"]; }}" title="{{  $fiche[0]["marque"]; }}"  width="110px;">
             
             <img   src="{{ asset('assets/modeles/'.$fiche[0]['image']) }}" alt="{{  $fiche[0]['marque'].' '.$fiche[0]['title']; }}" title="{{  $fiche[0]['marque'].' '.$fiche[0]['title']; }}"  width="250px;">
        </div>
        @foreach ($fiche as $d)
        <div>
           
            {{ $d['marque'] ." - ".  $d['title']." - ".  $d['prix'] }}

                
        </div> 
        @endforeach
    </div>

        

    <div class="col-4" >
        @include('partials.bloc-marques')
    </div>


</div>


   
@endsection