@extends('layout/main')

@section('title','Simulasi')

@section('container')
    <div>
        <div class="h1">
            STOK PUPUK
        </div>
    </div>
    
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table align-middle">
            <thead class="table-dark">
                <tr class='ce'>
                <th scope="col">#</th>
                <th scope="col">Bulan</th>
                <th scope="col">Tahun</th>
                <th scope="col">Jenis Urea</th>
                <th scope="col">Pabrik_Sub</th>
                <th scope="col">Pabrik_Nonsub</th>
                <th scope="col">Pabrik_Total</th>
                <th scope="col">SiapJual_Sub</th>
                <th scope="col">SiapJual_Nonsub</th>
                <th scope="col">SiapJual_Total</th>
                <th scope="col">Total</th>
                <th scope="col">Aksi</th>
               
                </tr>
            </thead>
            <tbody>
                @foreach( $stocks as $stock)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $stock->Bulan}}</td>
                        <td>{{ $stock->Tahun}}</td>
                        <td>{{ $stock->Urea}}</td>
                        <td>{{ $stock->Pabrik_Sub}}</td>
                        <td>{{ $stock->Pabrik_Nonsub}}</td>
                        <td>{{ $stock->Pabrik_Total}}</td>
                        <td>{{ $stock->SiapJual_Sub}}</td>
                        <td>{{ $stock->SiapJual_Nonsub}}</td>
                        <td>{{ $stock->SiapJual_Total}}</td>
                        <td>{{ $stock->Total}}</td>
                        <td>
                            <a href="{{ $stock->id }}/edit" role="button" class="btn btn-success btn-sm" data-bs-toggle="button">Edit Data</a>
                            
                            <form action="{{ $stock->id }}" method="post">
                            @method('delete')
                            @csrf
                                <button type="submit" role="button" class="btn btn-danger btn-sm">Hapus Data</button>
                            
                            </form>
                            <a href="/stocks/{{$stock->id}}" class="btn btn-primary btn-sm" role="button" data-bs-toggle="button" aria-pressed="true">Detail</a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/stocks/create" class="btn btn-primary btn-sm" role="button" data-bs-toggle="button" aria-pressed="true">Tambah Data</a>
        </div>
    </div>
@endsection