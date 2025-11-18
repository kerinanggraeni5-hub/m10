<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{

    public function index()
    {
        return Lokasi::all();
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'latittude' => 'required',
            'longitude' => 'required'
        ]);
        
        return Lokasi::create($request->all());
    }

    public function show($id)
    {
        return Lokasi::find($id);
    }

  
    public function update(Request $request, $id)
    {
        $lokasi = Lokasi::find($id);

        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'latittude' => 'required',
            'longitude' => 'required'
        ]);
        
        $lokasi->update($request->all());

        return $lokasi;
    }

 
    public function destroy($id)
    {
        return Lokasi::destroy($id);
    }
}