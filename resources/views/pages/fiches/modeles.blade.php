@extends('layouts.app')

 
@section('title', 'Liste des modeles')




@section('content')
 



@foreach ($modeles as $d)
<div>
    <a href="{{ route('fiche.modeles' , ['marque' => $d['title'] ] ) }}">
         
    </a>

    {{  dump($d); }}
</div> 
@endforeach

   
@endsection