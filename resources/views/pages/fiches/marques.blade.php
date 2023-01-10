@extends('layouts.app')

 
@section('title', 'Decouvrir tous les fiches techniques')




@section('content')
 
<div class="row" >
    
    <div class="col-8" >
        <div class="row">
            @foreach ($marques as $d)
                <div class="col-lg-4 col-md-6">
                    <!-- product card -->
                    <div class="product-item bg-light">
                        <div class="card">
                            <div class="thumb-content text-center m-4" style="line-height: 130px;height: 130px;">
                                <!-- <div class="price">$200</div> -->
                                <a href="{{ route('fiche.modeles' , ['marque' => strtolower($d['title']) ] ) }}">
                                    <img class="card-img-top img-fluid" src="{{ asset('assets/marques/'.$d["logo"]) }}" alt="{{  $d["title"]; }}"  style="vertical-align: middle;max-height:124px;">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title"><a href="{{ route('fiche.modeles' , ['marque' => strtolower($d['title']) ] ) }}">{{  $d["title"]; }}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>

    <div class="col-4" >
    </div>
</div>
   
@endsection