@extends('layouts.app')

 
@section('title', 'Decouvrir tous les fiches techniques')




@section('content')
 
<div class="row" >
    @foreach ($fiches as $d)
        

    
    <div class="col-sm-6" >
        <div class="card" >
            <a href="{{ route('fiche.modeles' , ['marque' => $d['title'] ] ) }}">
                <img   src="{{ asset('logo/'.$d["logo"]) }}" alt="{{  $d["title"]; }}" title="{{  $d["title"]; }}"  width="250px;">
                <div class="card-body">
                <h5 class="card-title">{{  $d["title"]; }}</h5>
                </div>
            </a>
        </div>
    </div>


    @endforeach
</div>
   
@endsection