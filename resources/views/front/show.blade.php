@extends('front.komponen')

@section('content')

<section id="subscribe" class="bookshelf">
    <div class="container"  >
		<div class="row justify-content-center">
            <h1 align="center" class="banner-title">{{ $film->judul }}</h1>
            <div class="col-4 my-3">
                <img src="/images/{{ $film->image }}" width="400px" height="500px" alt="banner" class="banner-image">
            </div>
            @php
                use Carbon\Carbon;
                Carbon::setLocale('id');
            @endphp
            <div class="col-4 my-3">
                <div class="row">
                    <h3>Sutradara : {{ $film->sutradara }}</h3>
                    <h3>Jumlah Episode : {{ $film->j_episode }}</h3>
                    <h3>Tanggal : {{ Carbon::parse($film->tanggal)->translatedFormat('d F Y') }}</h3>
                    <h3>Rating : {{ number_format($film->rating/10, 1) }}</h3>
                    <h3>Referensi : {{ $film->referensi }}</h3>
                </div>
            </div>
        </div>

        <div class="row my-3 justify-content-center">
            <div class="col">
                <p>{{ str_replace(['<p>', '</p>'], '', $film->deskripsi) }}</p>
            </div>
        </div>
	</div>
</section>

@endsection