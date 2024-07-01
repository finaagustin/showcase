@extends('layouts.admin')

@section('pages')
    Film
@endsection

@section('judul')
    Daftar Film
@endsection

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Data film</strong>
                    </div>
                    <div class="card-body">
                     <div class="d-flex justify-content-end">
                        <a href="{{ route('film.create') }}" class="fas fa-plus-square btn btn-outline-primary float-right"> Tambah Data</a>
                     </div>
                        <div class="table-responsive">
                           <table class="table table-hover" id="datatable">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Cover</th>
                                    <th>Tahun</th>
                                    <th>Judul</th>
                                    <th>Sutradara</th>
                                    <th>Kategori</th>
                                    <th>Option</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @php $no=1; @endphp
                                    @foreach ($film as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><img src="/images/{{ $data->image }}" width="100px" height="100px"></td>
                                            <td>{{ \Carbon\Carbon::parse($data->tanggal)->format('Y') }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <td>{{ $data->sutradara }}</td>
                                            <td>{{ $data->kategori->kategori }}</td>
                                            <td>
                                                <form action="{{ route('film.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('film.edit', $data->id) }}"
                                                        class="fas fa-edit btn btn-outline-success"> Edit </a> |
                                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?')"
                                                        class="fas fa-trash-alt btn btn-outline-danger"> Hapus </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                              </tbody>
                           </table>
                        </div>
                        {{ $film->links() }}
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