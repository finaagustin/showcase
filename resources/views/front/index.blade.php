@extends('front.komponen')

@section('content')

<section id="billboard">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<button class="prev slick-arrow">
					<i class="icon icon-arrow-left"></i>
				</button>

				<div class="main-slider pattern-overlay">
					<div class="slider-item">
						<div class="banner-content">
							<h2 class="banner-title">{{ $bagus1->judul }} ( {{ number_format($bagus1->rating/10, 1)}} )</h2>
							<?php $clean = strip_tags($bagus1->deskripsi); ?>
							<p>{{ strlen($clean) > 130 ? substr($clean, 0 , 130). '...' : $clean }}</p>
							<div class="btn-wrap">
								<a href="{{ 'show/' . $bagus1->id }}" class="btn btn-outline-accent btn-accent-arrow">Baca Selengkapnya<i
										class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div><!--banner-content-->
						<img src="/images/{{ $bagus1->image }}" width="400px" height="600px" alt="banner" class="banner-image">
					</div><!--slider-item-->

					<div class="slider-item">
						<div class="banner-content">
							<h2 class="banner-title">{{ $bagus2->judul }}( {{ number_format($bagus2->rating/10, 1)}} )</h2>
							<?php $clean_data = strip_tags($bagus2->deskripsi); ?>
							<p>{{ strlen($clean_data) > 130 ? substr($clean_data, 0 , 130). '...' : $clean_data }}</p>
							<div class="btn-wrap">
								<a href="{{ 'show/' . $bagus2->id }}" class="btn btn-outline-accent btn-accent-arrow">Baca Selengkapnya<i
										class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div><!--banner-content-->
						<img src="/images/{{ $bagus2->image }}" width="400px" height="600px" alt="banner" class="banner-image">
					</div><!--slider-item-->

					<div class="slider-item">
						<div class="banner-content">
							<h2 class="banner-title">{{ $bagus3->judul }}( {{ number_format($bagus3->rating/10, 1)}} )</h2>
							<?php $clean_data = strip_tags($bagus3->deskripsi); ?>
							<p>{{ strlen($clean_data) > 130 ? substr($clean_data, 0 , 130). '...' : $clean_data }}</p>
							<div class="btn-wrap">
								<a href="{{ 'show/' . $bagus3->id }}" class="btn btn-outline-accent btn-accent-arrow">Baca Selengkapnya<i
										class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div><!--banner-content-->
						<img src="/images/{{ $bagus3->image }}" width="400px" height="600px" alt="banner" class="banner-image">
					</div><!--slider-item-->

				</div><!--slider-->

				<button class="next slick-arrow">
					<i class="icon icon-arrow-right"></i>
				</button>

			</div>
		</div>
	</div>

</section>

<section id="subscribe" class="bookshelf py-5 my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center">
					<div class="title">
						<span>Beberapa Film Pilihan</span>
					</div>
					<h2 class="section-title">Films</h2>
				</div>

				<ul class="tabs">
					<li data-tab-target="#all-genre" class="active tab">All Genre</li>
					<li data-tab-target="#horror" class="tab">Horror</li>
					<li data-tab-target="#animasi" class="tab">Animasi</li>
					<li data-tab-target="#romantic" class="tab">Romansa</li>
					<li data-tab-target="#drama" class="tab">Drama</li>
					<li data-tab-target="#komedi" class="tab">Komedi</li>
					<li data-tab-target="#aksi" class="tab">Aksi</li>
					<li data-tab-target="#fantasi" class="tab">Fantasi</li>
				</ul>

				<div class="tab-content">
					<div id="all-genre" data-tab-content class="active">
						<div class="row">
							@foreach ($film as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach

							{{ $film->onEachSide(1)->links('custom-pagination') }}

						</div>
					</div>
					<div id="horror" data-tab-content>
						<div class="row">
							@foreach ($horror as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $horror->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

					<div id="animasi" data-tab-content>
						<div class="row">
							@foreach ($animasi as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $animasi->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

					<div id="romantic" data-tab-content>
						<div class="row">
							@foreach ($romansa as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $romansa->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

					<div id="drama" data-tab-content>
						<div class="row">
							@foreach ($drama as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $drama->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

					<div id="komedi" data-tab-content>
						<div class="row">
							@foreach ($komedi as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $komedi->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

					<div id="aksi" data-tab-content>
						<div class="row">
							@foreach ($aksi as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $aksi->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

					<div id="fantasi" data-tab-content>
						<div class="row">
							@foreach ($fantasi as $data)
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/{{ $data->image }}" alt="Books" class="product-item">
										<a href="{{ route('show', $data->id) }}">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Selengkapnya...</button>
										</a>
									</figure>
									<figcaption>
										<h3>{{ $data->judul }}</h3>
										<span>{{ $data->penerbit }}</span>
										<div class="item-price">{{ number_format($data->rating/10, 1)}}</div>
									</figcaption>
								</div>
							</div>
							@endforeach
							{{ $fantasi->onEachSide(1)->links('custom-pagination') }}
						</div>
					</div>

				</div>

			</div><!--inner-tabs-->

		</div>
	</div>
</section>

@endsection

@section('menu')
<li class="menu-item"><a href="#subscribe" class="nav-link">Films</a></li>
@endsection