@extends('layouts.app')

 
@section('title', 'Decouvrir tous les fiches techniques')




@section('content')
 
<div class="row" >
    
    <div class="col-8" >
        <div class="row" >
            @foreach ($marques as $d)
                    
            <div class="col-3" >
                <div class="card" >
                    <a href="{{ route('fiche.modeles' , ['marque' => strtolower($d['title']) ] ) }}">
                        <img   src="{{ asset('assets/marques/'.$d["logo"]) }}" alt="{{  $d["title"]; }}" title="{{  $d["title"]; }}"  width="250px;">
                        <div class="card-body">
                        <h5 class="card-title">{{  $d["title"]; }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach        
        </div>       
    </div>

    <div class="col-4" >
    </div>
</div>
   
@endsection