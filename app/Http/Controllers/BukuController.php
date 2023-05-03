<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    //get buku
    public function index(){
        $data_buku = Buku::all();
        $no = 0;
        return view('Buku.index', compact('data_buku', 'no'));
    }
    //create buku
    public function create(){
    return view("buku.create_buku");
    }
    //store buku
    public function store(Request $req){
        $buku = new Buku();
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->harga = $req->harga;
        $buku->tgl_terbit = $req->tgl_terbit;
        $buku->save();
        return redirect()->route('buku')->with('pesan', "data berhasil di tambahkan");
    }

    //delete buku
    public function destroy($id){
       $buku = Buku::find($id);
       $buku->delete();
       return redirect()->route('buku')->with('pesan', "data berhasil di hapus");
    }

    //edit buku
    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', ["data_buku" => $buku]);
    }
    public function update(Request $req, $id){
        $buku = Buku::find($id);
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->harga = $req->harga;
        $buku->tgl_terbit = $req->tgl_terbit;
        $buku->save();
        return redirect()->route('buku')->with('pesan', "data berhasil di update");
    }
}
