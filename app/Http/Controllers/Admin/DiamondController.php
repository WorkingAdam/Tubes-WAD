<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diamond;
use Illuminate\Http\Request;

class DiamondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'Harga Diamond Terkini';
        $data['class'] = 'master_data';
        $data['subclass'] = 'diamond';
        $data['q'] = Diamond::all();
        return view('admin.diamond.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['judul'] = 'Tambah Diamond';
        $data['class'] = 'master_data';
        $data['subclass'] = 'diamond';
        return view('admin.diamond.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'jumlah' => 'required',
            'harga' => 'required',
        ]);

        Diamond::create([
			'jumlah' => $request->jumlah,
			'harga' => $request->harga,
		]);
        return redirect()->route('admin.diamond')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['judul'] = 'Edit Diamond';
        $data['class'] = 'master_data';
        $data['subclass'] = 'diamond';
        $data['row'] = Diamond::find($id);
        return view('admin.diamond.edit', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        

        $aksi = Diamond::find($id);
        $aksi->jumlah = request('jumlah');
        $aksi->harga = request('harga');

        $aksi->save();

        return redirect()->route('admin.diamond')->with('succes','Data Berhasil di Input');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aksi = Diamond::find($id);
        $aksi->delete();
        return redirect()->route('admin.diamond')->with('succes','Data Berhasil di Hapus');
    }
}
