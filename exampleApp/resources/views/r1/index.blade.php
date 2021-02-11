@extends('layout/main')

@section('title','Simulasi')

@section('container')
    <div class="container">
        <div class="h1">
            STOK PUPUK
        </div>
    </div>

    <div class="table-responsive container">
        <table class="table table-striped table align-middle">
            <thead class="table-dark">
                <tr class='ce'>
                <th scope="col">#</th>
                <th scope="col">Stok Awal</th>
                <th scope="col">Subsidi</th>
                <th scope="col">Non Subsidi Urea</th>
                <th scope="col">Pabrik_Sub</th>

                <th scope="col">Aksi</th>
               
                </tr>
            </thead>
            <tbody>
                @foreach( $r1datas as $r1data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $r1data->StokAwal_Subsidi}}</td>
                        <td>{{ $r1data->StokAwal_Nonsubsidi}}</td>
                        <td>{{ $r1data->StokAwal}}</td>

                        <td>
                            <button href=”” role="button" class="btn btn-success btn-sm" >Edit Data</button>
                            <button href=”” role="button" class="btn btn-danger btn-sm">Hapus Data</button>
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