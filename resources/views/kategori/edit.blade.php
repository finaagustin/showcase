@extends('layouts.admin')

@section('pages')
    Kategori    /   Edit
@endsection

@section('judul')
    Edit Kategori
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Kategori</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                    <div class="form-group">
                        <label for=""><strong>Kategori Film</strong></label>
                        <input type="text" name="kategori" value="{{ $kategori->kategori }} "class="form-control" required>
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

@section('nav')
<a class="nav-link" href=" {{ route('kategori.index') }} ">
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