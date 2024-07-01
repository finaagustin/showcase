@extends('layouts.admin')

@section('pages')
    Kategori    /   Tambah
@endsection

@section('judul')
    Tambah Kategori
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Data Kategori</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for=""><strong>Kategori Film</strong></label>
                        <input type="text" name="kategori" class="form-control">
                    </div>
                    {{-- @error('kategori')
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
<a class="nav-link active" href=" {{ route('kategori.index') }} ">
@endsection
@section('nav3')
<a class="nav-link" href=" {{ route('film.index') }} ">
@endsection