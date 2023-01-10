@extends('layouts.app')

 
@section('title', 'Liste des modeles' . ' - '.$modeles[0]["marque"] )




@section('content')
 
<div class="row" >
    
    <div class="col-8" >
        <div class="about-img mb-4">
            <img src="{{ asset('assets/marques/'.$modeles[0]["logo"]) }}" alt="{{  $modeles[0]["marque"]; }}" title="{{  $modeles[0]["marque"]; }}" alt="" class="img-fluid w-40 rounded">
        </div>
        <div class="row">
            @foreach ($modeles as $d)
            <div class="col-lg-4 col-md-6">
                <!-- product card -->
                <div class="product-item bg-light">
                    <div class="card">
                        <div class="thumb-content text-center m-4" style="line-height: 130px;height: 130px;">
                            <!-- <div class="price">$200</div> -->
                            <a href="{{ route('fiche.fichetechnique' , ['marque' => $d['marque'] , 'modele' => $d['slug'] ] ) }}">
                                <img class="card-img-top img-fluid" alt="{{  $d['marque'].' '.$d['title']; }}" title="{{  $d['marque'].' '.$d['title']; }}"  style="vertical-align: middle;max-height:124px;">
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title"><a href="{{ route('fiche.fichetechnique' , ['marque' => $d['marque'] , 'modele' => $d['slug'] ] ) }}">{{$d['title']}}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

        

    <div class="col-4" >

        @include('partials.bloc-marques')
    </div>


</div>


   
@endsection