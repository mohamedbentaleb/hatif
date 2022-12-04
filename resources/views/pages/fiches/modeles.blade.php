@extends('layouts.app')

 
@section('title', 'Liste des modeles' . ' - '.$modeles[0]["marque"] )




@section('content')
 
<div class="row" >
    
    <div class="col-8" >
  
        <div class="" >
             <img   src="{{ asset('assets/marques/'.$modeles[0]["logo"]) }}" alt="{{  $modeles[0]["marque"]; }}" title="{{  $modeles[0]["marque"]; }}"  width="250px;">
        </div>
        @foreach ($modeles as $d)
        <div>
            <a href="{{ route('fiche.fichetechnique' , ['marque' => $d['marque'] , 'modele' => $d['slug'] ] ) }}">
                {{$d['title']}}

                <img   src="{{ asset('assets/modeles/'.$d['image']) }}" alt="{{  $d['marque'].' '.$d['title']; }}" title="{{  $d['marque'].' '.$d['title']; }}"  width="250px;">
  
            </a>
        </div> 
        @endforeach
    </div>

        

    <div class="col-4" >

        @include('partials.bloc-marques')
    </div>


</div>


   
@endsection