@extends('layout.main')
@section('container')
    <div class="container">
        <form action="{{route("buku.update", $data_buku->id)}}" method="POST">
            @csrf
            <div>
                <label for="judul">judul</label>
                <input type="text" class="form-control" name="judul" id="" value="{{$data_buku->judul}}">
            </div>
            <div>
                <label for="penulis">penulis</label>
                <input type="text" class="form-control" name="penulis" id="" value="{{$data_buku->penulis}}">
            </div>
            <div>
                <label for="harga">harga</label>
                <input type="text" class="form-control" name="harga" id="" value="{{$data_buku->harga}}">
            </div>
            <div>
                <label for="tgl_terbit">tanggal terbit</label>
                <input type="date" class="form-control" name="tgl_terbit" id="" value="{{$data_buku->tgl_terbit}}">
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/buku/index" class="btn btn-primary">batal</a>
            </div>
        </form>
    </div>
@endsection