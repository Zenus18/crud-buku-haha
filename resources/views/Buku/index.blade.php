@extends('layout.main')
@section('container')
    <div class="container">
        @if(Session::has('pesan'))
            <div class="alert alert-success">{{Session::get('pesan')}}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tanggal Terbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_buku as $data)
                    <tr>
                        <td>{{++$no}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->penulis}}</td>
                        <td>{{"Rp ".number_format($data->harga, 2, ',','.')}}</td>
                        <td>{{$data->tgl_terbit}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("buku.edit", $data->id)}}">edit</a>
                            <a class="btn btn-danger" href="{{route("buku.destroy", $data->id)}}">hapus</a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><a href="{{route('buku.create')}}" class="btn btn-primary">tambah buku</a></p>
        <h5>Jumlah buku: {{$data_buku->count('id')}}</h5>
        <p>Total harga: {{"Rp ".number_format($data_buku->sum('harga'), 2, ',','.')}}</p>
    </div>
@endsection