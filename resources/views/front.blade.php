@extends('layouts.app')

@section('title', 'Hatif')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hatif
        </h2>
    </x-slot>
    <!--===========================================
    =            Popular deals section            =
    ============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8"> 
    		<div class="row">
    			<div class="col-md-12">
    				<div class="section-title">
    					<h2>Trending Adds</h2>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
    				</div>
    			</div>
    		</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 my-lg-0 my-3">
				  <div class="counter-content text-center bg-light py-4 rounded">
					<i class="fa fa-smile-o d-block"></i>
					<h5>Happy Customers</h5>
				  </div>
				</div>
				<div class="col-lg-4 col-sm-6 my-lg-0 my-3">
				  <div class="counter-content text-center bg-light py-4 rounded">
					<i class="fa fa-user-o d-block"></i>
					<h5>Active Members</h5>
				  </div>
				</div>
				<div class="col-lg-4 col-sm-6 my-lg-0 my-3">
				  <div class="counter-content text-center bg-light py-4 rounded">
					<i class="fa fa-bookmark-o d-block"></i>
					<h5>Verified Ads</h5>
				  </div>
				</div>
			  </div>


			  <div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Adds</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-1.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-2.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-3.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-2.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Adds</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-1.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-2.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-3.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src="{{ asset('front/images/products/products-2.jpg') }}" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
					</div>
				</div>
			</div>
			  
</div>



<div class="col-lg-4 col-md-4">
	<div class="category-sidebar">
		<div class="widget category-list">
			<h4 class="widget-header">All Category</h4>
			<ul class="category-list">
				<li><a href="{{ route('annonces.detail') }}">Laptops <span>93</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">Iphone <span>233</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">Microsoft  <span>183</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">Monitors <span>343</span></a></li>
			</ul>
		</div>

		<div class="widget category-list">
			<h4 class="widget-header">Nearby</h4>
			<ul class="category-list">
				<li><a href="{{ route('annonces.detail') }}">New York <span>93</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">New Jersy <span>233</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">Florida  <span>183</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">California <span>120</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">Texas <span>40</span></a></li>
				<li><a href="{{ route('annonces.detail') }}">Alaska <span>81</span></a></li>
			</ul>
		</div>

		<div class="widget filter">
			<h4 class="widget-header">Show Produts</h4>
			<select>
				<option>Popularity</option>
				<option value="1">Top rated</option>
				<option value="2">Lowest Price</option>
				<option value="4">Highest Price</option>
			</select>
		</div>

		<div class="widget price-range w-100">
			<h4 class="widget-header">Price Range</h4>
			<div class="block">
								<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
								data-slider-value="[0,5000]">
						<div class="d-flex justify-content-between mt-2">
								<span class="value">$10 - $5000</span>
						</div>
			</div>
		</div>

		<div class="widget product-shorting">
			<h4 class="widget-header">By Condition</h4>
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="">
				Brand New
			</label>
			</div>
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="">
				Almost New
			</label>
			</div>
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="">
				Gently New
			</label>
			</div>
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="">
				Havely New
			</label>
			</div>
		</div>

	</div>
	</div>
	</div>
</div>
</section>
@endsection
