@extends('layout/main')

@section('title','Detail')

@section('container')
    <div>
        <div class="h1">
            STOK PUPUK {{ $stock->Urea}}
        </div>
    <div class="card " style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $stock->Urea}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $stock->Bulan}} {{ $stock->Tahun}}</h6>
            <p class="card-text">Pabrik Sub = {{ $stock->Pabrik_Sub}}</p>
            <p class="card-text">Pabrik NonSub = {{ $stock->Pabrik_Nonsub}}</p>
            <p class="card-text">Pabrik Total = {{ $stock->Pabrik_Total}}</p>
            <p class="card-text">Pabrik Total = {{ $stock->Pabrik_Total}}</p>
            <p class="card-text">SiapJual_Sub = {{ $stock->SiapJual_Sub}}</p>
            <p class="card-text">SiapJual NonSub = {{ $stock->SiapJual_Nonsub}}</p>
            <p class="card-text">SiapJual Total = {{ $stock->SiapJual_Total}}</p>
            <p class="card-text">Total = {{ $stock->Total}}</p>
            <a href="/stocks/edit/{{$stock->id}}" class="btn btn-primary btn-sm" role="button" data-bs-toggle="button" aria-pressed="true">Edit data</a>
            <a href="/stocks/delete/{{$stock->id}}" class="btn btn-danger btn-sm" role="button" data-bs-toggle="button" aria-pressed="true">Hapus data</a>
            <a href="/stocks/" class="btn btn-success btn-sm" role="button" data-bs-toggle="button" aria-pressed="true">Kembali</a>


        </div>
    </div>
    </div>
@endsection