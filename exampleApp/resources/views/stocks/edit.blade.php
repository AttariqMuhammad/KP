@extends('layout/main')

@section('title','Buat Data Baru')

@section('container')
    <div>
        <div class="h1">
            Form Ubah Data Stok
        </div>
    </div>

    <form method ='POST' action='/stocks/{{ $stock->id }}'class="col-9">
    @method('patch')
    @csrf
        <div class="form-group">
                <label for="bulan">Bulan</label>
                <select class="form-select" id="bulan" name='bulan' value='{{ $stock->Bulan  }}'>
                    <option selected>{{ $stock->Bulan  }}</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
        </div>
        <div class="form-group">
            <label for='tahun'>tahun</label>
            <input type='Text' class='form-control @error('tahun') is-invalid @enderror' id='tahun' placeholder="masukkan Data tahun" name='tahun' value='{{ $stock->Tahun  }}'>
            <div class="invalid-feedback">
                Tolong masukkan data tahun.
            </div>
        </div>

 
        <div class="form-group">
            <labe for='urea'>Urea</label>
                <select class="form-select" id="urea" name='urea' value='{{ $stock->Urea  }}'>
                    <option selected>{{ $stock->Urea  }}</option>
                    <option value="PKG">PKG</option>
                    <option value="PKC">PKC</option>
                    <option value="PKT">PKT</option>
                    <option value="PIM">PIM</option>
                    <option value="PSP">PSP</option>
                </select>
        </div>
        <div class="form-group">
            <label for='pabrik_Sub'>pabrik_Sub</label>
            <input type='Text' class='form-control' id='pabrik_Sub' placeholder="masukkan Data pabrik_Sub" name='pabrik_Sub' value='{{ $stock->Pabrik_Sub  }}'>
        </div>
        <div class="form-group">
            <label for='pabrik_Nonsub'>pabrik_Nonsub</label>
            <input type='Text' class='form-control' id='pabrik_Nonsub' placeholder="masukkan Data pabrik_Nonsub" name='pabrik_Nonsub' value='{{ $stock->Pabrik_Nonsub  }}'>
        </div>
        <div class="form-group">
            <label for='siapJual_Sub'>siapJual_Sub</label>
            <input type='Text' class='form-control' id='siapJual_Sub' placeholder="masukkan Data siapJual_Sub" name='siapJual_Sub' value='{{ $stock->SiapJual_Sub  }}'>
        </div>
        <div class="form-group">
            <label for='siapJual_Nonsub'>siapJual_Nonsub</label>
            <input type='Text' class='form-control' id='siapJual_Nonsub' placeholder="masukkan Data siapJual_Nonsub" name='siapJual_Nonsub' value='{{ $stock->SiapJual_Nonsub  }}'>
        </div>

        <button type='Submit' class="btn btn-primary mt-3">Ubah Data !</button>
    </form>

@endsection