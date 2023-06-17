<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    Public function index(){
        $data = Pegawai::all();
        return view('home', compact('data'));
    }
    // fungsi daftar
    public function daftar (Request $request){
        Pegawai::create($request->all());
        return redirect('/')->with('success', 'Berhasil Terdaftar');
    }
    // fungsi edit
    public function edit($id){
        $data = Pegawai::find($id);
        return view('edit',compact('data'));
    }
    // fungsi delete
    public function delete(Request $request, $id){
        $data = Pegawai::find($id);
        $data->delete($request->all());

        return redirect('/')->with ('delete', 'Delete Complete');
    }
    // fungsi update
    public function update(Request $request,$id){
        $data = Pegawai::find($id);
        $data->update($request->all());

        return redirect('/')->with('success', 'Success!');
    }
    // fungsi register
    public function register(Request $request){
        Pegawai::create($request->all());
        return redirect('daftar')->with('Success', 'Register Success');

    }
}