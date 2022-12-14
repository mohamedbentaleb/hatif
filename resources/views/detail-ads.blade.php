@extends('layouts.app')

@section('title', 'Hatif')

@section('content')
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search nice-select-white">
					<form>
						<div class="form-row align-items-center">
							<div class="form-group col-xl-4 col-lg-3 col-md-6">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0">
									<option>Category</option>
									<option value="1">Top rated</option>
									<option value="2">Lowest Price</option>
									<option value="4">Highest Price</option>
								</select>
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div>
							<div class="form-group col-xl-2 col-lg-3 col-md-6">

								<button type="submit" class="btn btn-primary active w-100">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-lg-8">
				<div class="product-details">
					<h1 class="product-title">Hp Dual Core 2gb Ram-Slim Laptop Available In Very Low Price</h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="user-profile.html">Andrew</a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="category.html">Electronics</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="category.html">Dhaka Bangladesh</a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
						<div class="product-slider-item my-4" data-image="{{ asset('front/images/products/products-1.jpg') }}">
							<img class="img-fluid w-100" src="{{ asset('front/images/products/products-1.jpg') }}" alt="product-img">
						</div>
						<div class="product-slider-item my-4" data-image="{{ asset('front/images/products/products-2.jpg') }}">
							<img class="d-block img-fluid w-100" src="{{ asset('front/images/products/products-2.jpg') }}" alt="Second slide">
						</div>
						<div class="product-slider-item my-4" data-image="{{ asset('front/images/products/products-3.jpg') }}">
							<img class="d-block img-fluid w-100" src="{{ asset('front/images/products/products-3.jpg') }}" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="{{ asset('front/images/products/products-1.jpg') }}">
							<img class="d-block img-fluid w-100" src="{{ asset('front/images/products/products-1.jpg') }}" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="{{ asset('front/images/products/products-2.jpg') }}">
							<img class="d-block img-fluid w-100" src="{{ asset('front/images/products/products-2.jpg') }}" alt="Third slide">
						</div>
					</div>
					<!-- product slider -->

					<div class="content mt-5 pt-5">
						<div class="tab-content" id="pills-tabContent">
							<div class="" id="pills-profile">
								<h3 class="tab-title">Product Specifications</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>Seller Price</td>
											<td>$450</td>
										</tr>
										<tr>
											<td>Added</td>
											<td>26th December</td>
										</tr>
										<tr>
											<td>State</td>
											<td>Dhaka</td>
										</tr>
										<tr>
											<td>Brand</td>
											<td>Apple</td>
										</tr>
										<tr>
											<td>Condition</td>
											<td>Used</td>
										</tr>
										<tr>
											<td>Model</td>
											<td>2017</td>
										</tr>
										<tr>
											<td>State</td>
											<td>Dhaka</td>
										</tr>
										<tr>
											<td>Battery Life</td>
											<td>23</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="" id="pills-home">
								<h3 class="tab-title">Product Description</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laudantium beatae quod perspiciatis, neque
									dolores eos rerum, ipsa iste cum culpa numquam amet provident eveniet pariatur, sunt repellendus quas
									voluptate dolor cumque autem molestias. Ab quod quaerat molestias culpa eius, perferendis facere vitae commodi
									maxime qui numquam ex voluptatem voluptate, fuga sequi, quasi! Accusantium eligendi vitae unde iure officia
									amet molestiae velit assumenda, quidem beatae explicabo dolore laboriosam mollitia quod eos, eaque voluptas
									enim fuga laborum, error provident labore nesciunt ad. Libero reiciendis necessitatibus voluptates ab
									excepturi rem non, nostrum aut aperiam? Itaque, aut. Quas nulla perferendis neque eveniet ullam?</p>

								<iframe width="100%" height="400" src="https://www.youtube.com/embed/LUH7njvhydE?rel=0&amp;controls=0&amp;showinfo=0"
								 frameborder="0" allowfullscreen></iframe>
								<p></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sed, officia reiciendis necessitatibus
									obcaecati eum, quaerat unde illo suscipit placeat nihil voluptatibus ipsa omnis repudiandae, excepturi! Id
									aperiam eius perferendis cupiditate exercitationem, mollitia numquam fuga, inventore quam eaque cumque fugiat,
									neque repudiandae dolore qui itaque iste asperiores ullam ut eum illum aliquam dignissimos similique! Aperiam
									aut temporibus optio nulla numquam molestias eum officia maiores aliquid laborum et officiis pariatur,
									delectus sapiente molestiae sit accusantium a libero, eligendi vero eius laboriosam minus. Nemo quibusdam
									nesciunt doloribus repellendus expedita necessitatibus velit vero?</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Price</h4>
						<p>$230</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="{{ asset('front/images/user/user-thumb.jpg') }}" alt="">
						<h4><a href="user-profile.html">Jonathon Andrew</a></h4>
						<p class="member-time">Member Since Jun 27, 2017</p>
						<a href="single.html">See all ads</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="contact-us.html" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a></li>
							<li class="list-inline-item"><a href="single.html" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">Make an
									offer</a></li>
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">What would you rate
							<br>
							this product</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer">
						<h5 class="widget-header">Safety Tips</h5>
						<ul>
							<li>Meet seller at a public place</li>
							<li>Check the item before you buy</li>
							<li>Pay only after collecting the item</li>
							<li>Pay only after collecting the item</li>
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Have a great product to post ? Share it with
							your fellow users.
						</p>
						<!-- Submii button -->
						<a href="single.html" class="btn btn-transparent-white">Submit Listing</a>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
@endsection