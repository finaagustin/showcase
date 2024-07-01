@extends('layouts.admin')

@section('pages')
    Film  /  Edit
@endsection

@section('judul')
    Edit Film
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Film</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('film.update', $film->id) }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                        <img src="/images/{{ $film->image }}" width="150px">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Judul:</strong></label>
                        <input type="text" name="judul" value="{{ $film->judul }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Jumlah Episode:</strong></label>
                        <input type="text" name="j_episode" value="{{ $film->j_episode }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Sutradara:</strong></label>
                        <input type="text" name="sutradara" value="{{ $film->sutradara }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Tanggal:</strong></label>
                        <input type="date" name="tanggal" value="{{ $film->tanggal }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Rating:</strong></label>
                        <input type="number" name="rating" value="{{ $film->rating }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"><strong>Kategori:</strong></label>
                        <select class="form-control" name="id_kategori" id="exampleFormControlSelect1">
                            @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" @if ($data->kategori == $film->kategori->kategori) selected @endif>
                                    {{ $data->kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Deskripsi:</strong></label>
                        <textarea class="form-control" name="deskripsi" rows="5">{{ $film->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Referensi:</strong></label>
                        <input type="text" name="referensi" value="{{ $film->referensi }}" class="form-control" required>
                    </div>
                    <div class="form-group py-3">
                        <a href="{{ url()->previous() }}"
                                class="btn btn-outline-secondary"> Kembali</a>
                        <button type="submit" class="btn btn-outline-primary"> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bawah')
    @include('admin.footer')
@endsection

@section('nav1')
<a class="nav-link" href=" {{ route('dashboard') }} ">
@endsection
@section('nav2')
<a class="nav-link" href=" {{ route('kategori.index') }} ">
@endsection
@section('nav3')
<a class="nav-link active" href=" {{ route('film.index') }} ">
@endsection