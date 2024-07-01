@extends('layouts.admin')

@section('pages')
    Film  /  Tambah
@endsection

@section('judul')
    Tambah Film
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Data film</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('film.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for=""><strong>Image:</strong></label>
                        <input type="file" name="image" class="form-control" placeholder="image">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Judul:</strong></label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Jumlah Episode:</strong></label>
                        <input type="number" name="j_episode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Sutradara:</strong></label>
                        <input type="text" name="sutradara" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Tanggal:</strong></label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Rating:</strong></label>
                        <input type="text" name="rating" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Kategori:</strong></label>
                        <select class="form-control" name=" id_kategori" id="">
                            @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                            @endforeach
                        </select>
                        {{-- @error('id_kategori')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Deskripsi:</strong></label>
                        <textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan Konten"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for=""><strong>Referensi:</strong></label>
                        <input type="text" name="referensi" class="form-control">
                    </div>
                    {{-- @error('film')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror --}}
                    <div class="form-group py-3">
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