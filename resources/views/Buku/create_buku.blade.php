@extends('layout.main')
@section('container')
    <div class="container">
        <form action="{{route("buku.store")}}" method="POST">
            @csrf
            <div>
                <label for="judul">judul</label>
                <input type="text" class="form-control" name="judul" id="">
            </div>
            <div>
                <label for="penulis">penulis</label>
                <input type="text" class="form-control" name="penulis" id="">
            </div>
            <div>
                <label for="harga">harga</label>
                <input type="text" class="form-control" name="harga" id="">
            </div>
            <div>
                <label for="tgl_terbit">tanggal terbit</label>
                <input type="date" class="form-control" name="tgl_terbit" id="">
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/buku/index" class="btn btn-primary">batal</a>
            </div>
        </form>
    </div>
@endsection