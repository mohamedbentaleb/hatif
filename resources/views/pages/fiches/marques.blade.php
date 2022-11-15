@extends('layouts.app')

 
@section('title', 'Decouvrir tous les fiches techniques')




@section('content')
 
    @foreach ($fiches as $d)
        <div>
            <a href="{{ route('fiche.modeles' , ['marque' => $d['title'] ] ) }}">
                <img src="{{ asset('public/logo/'.$d["title"]) }}" alt="{{  $d["title"]; }}" title="{{  $d["title"]; }}">
                {{  $d["title"]; }}
            </a>
        </div> 
    @endforeach
   
@endsection