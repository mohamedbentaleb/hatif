<div class="row" >
    @foreach ($b_brands as $d)
            
    <div class="col-3" >
        <div class="card" >
            <a href="{{ route('fiche.modeles' , ['marque' => strtolower($d['title']) ] ) }}">
                <img   src="{{ asset('assets/marques/'.$d["logo"]) }}" alt="{{  $d["title"]; }}" title="{{  $d["title"]; }}"  width="37px;"  height="37px;">
            </a>
        </div>
    </div>
    @endforeach        
</div>       