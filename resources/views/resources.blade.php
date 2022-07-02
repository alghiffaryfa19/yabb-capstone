@extends('layouts.index')
@section('title','Our Resources')

@section('content')
<section class="bg-primary bg-opacity-10">
	<div class="container">
		<div class="row">
			<!-- Content START -->
			<div class="col-lg-8 mx-auto text-center">
				<!-- Title -->
				<h1 class="display-6">Our Resources</h1>
				<p class="mb-0">Check Out Our Resources</p>
				<!-- Search bar -->

				<!-- Popular questions END -->
			</div>
      <!-- Content END -->

			<!-- Image -->
			<div class="col-12 mt-6">
				<img src="assets/images/element/help-center.svg" class="w-100" alt="">
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
			<!-- Titles -->

			<!-- Row START -->
			<div class="row g-4">
				<div class="col-md-6 col-xl-4">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-layers fs-1 text-success"></i>
							<h5 class="card-title mb-0 mt-2">Playing with Data</h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://docs.google.com/spreadsheets/d/1uAQ0fIh25zKiwdEb0gADBU0pvKAc5WJewdybff3z85A/edit#gid=442148653"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Google Spreadsheet</a></li>

							</ul>
						</div>
					</div>
					<!-- Card END -->
				</div>

                <div class="col-md-6 col-xl-4">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-info-circle fs-1 text-orange"></i>
							<h5 class="card-title mb-0 mt-2">Narration and Description</h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link d-flex"  target="_blank" href="https://docs.google.com/document/d/1hTQZWxx1wZTSnqswfrqgJ2j9nvry432blOl9OjaNGZQ/edit"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Google Docs</a></li>

							</ul>
						</div>
					</div>
					<!-- Card END -->
				</div>

				<div class="col-md-6 col-xl-4">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-layers fs-1 text-warning"></i>
							<h5 class="card-title mb-0 mt-2">Repository and Tech Stack</h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://github.com/alghiffaryfa19/yabb-capstone"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Github</a></li>
                                <li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://laravel.com"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Laravel</a></li>
                                <li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://leafletjs.com/"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Leaflet</a></li>
                                <li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://www.highcharts.com/"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>HighCharts</a></li>
                                <li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://www.amcharts.com/"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>AmCharts</a></li>
                                <li class="nav-item"><a class="nav-link d-flex" target="_blank" href="https://github.com/ans-4175/peta-indonesia-geojson"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Indonesia GeoJson</a></li>
							</ul>
						</div>
					</div>
					<!-- Card END -->
				</div>




			</div>
			<!-- Row END -->
	</div>
</section>
@endsection
