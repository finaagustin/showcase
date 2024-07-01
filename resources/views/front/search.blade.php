@extends('front.komponen')

@section('content')

<section id="subscribe" class="bookshelf py-5 my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center">
					<div class="title">
						<span>Beberapa Film</span>
					</div>
					<h2 class="section-title">Menampilkan Pencarian</h2>
				</div>

				<ul class="tabs">
					<li data-tab-target="#all-genre" class="active tab">All Genre</li>
				</ul>

				<div class="tab-content">
					<div id="all-genre" data-tab-content class="active">
                        @if($film->count())
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
                        
                        @else
                            <p>Tidak ada hasil pencarian.</p>
                        @endif
					</div>
				</div>

			</div><!--inner-tabs-->

		</div>
	</div>
</section>

@endsection