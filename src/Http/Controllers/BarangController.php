<?php

namespace Rivan\Barang\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    public function show($id){

        $data = HTTP::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.Session::get('token'),
        ])->get('http://127.0.0.1:8000/api/barang/'.$id);

        return view('barang::barang', [
            'data' => $data['data_barang']
        ]);
    }
    public function update(Request $request, $id){
        $data = HTTP::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.Session::get('token'),
        ])->post('http://127.0.0.1:8000/api/barang/'.$id , $request->all());

        if($data->status() == 403){
            abort(403);
        }

        return redirect('/data-barang');
    }
}
