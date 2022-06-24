<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'pel_id_gol' => 'required',
                'pel_no' => 'required',
                'pel_nama' => 'required',
                'pel_alamat' => 'required',
                'pel_hp' => 'required',
                'pel_ktp' => 'required',
                'pel_seri' => 'required',
                'pel_meteran' => 'required',
                'pel_aktif' => 'required',
                'pel_id_user' => 'required'

            ],
            [
                'pel_id_gol.required' => 'Id Golongan Pelanggan wajib diisi',
                'pel_no.required' => 'No Pelanggan Wajib diisi',
                'pel_nama.required' => 'Nama Pelanggan wajib diisi',
                'pel_alamat.required' => 'Alamat Pelanggan wajib diisi',
                'pel_hp.required' => 'HP Pelanggan wajib diisi',
                'pel_ktp.required' => 'KTP wajib diisi',
                'pel_seri.required' => 'Seri  Pelanggan wajib diisi',
                'pel_meteran.required' => 'Meteran Pelanggan wajib diisi',
                'pel_aktif.required' => 'Status Pelanggan wajib diisi',
                'pel_id_user.required' => 'Id User wajib diisi'                                
            ]
        );

        Pelanggan::create([
            'pel_id_gol' => $request->pel_id_gol,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'pel_id_user' => $request->pel_id_user,
        ]);

        return redirect('pelanggan');
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
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
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
        $request->validate(
            [
                'pel_id_gol' => 'required',
                'pel_nama' => 'required',
                'pel_alamat' => 'required',
                'pel_hp' => 'required',
                'pel_ktp' => 'required',
                'pel_seri' => 'required',
                'pel_meteran' => 'required',
                'pel_aktif' => 'required',
                'pel_id_user' => 'required'
            ],
            [
                'pel_id_gol.required' => 'Id Pelanggan wajib diisi',
                'pel_nama.required' => 'Nama Pelanggan wajib diisi',
                'pel_alamat.required' => 'Alamat Pelanggan wajib diisi',
                'pel_hp.required' => 'HP Pelanggan wajib diisi',
                'pel_ktp.required' => 'KTP wajib diisi',
                'pel_seri.required' => 'Seri  Pelanggan wajib diisi',
                'pel_meteran.required' => 'Meteran Pelanggan wajib diisi',
                'pel_aktif.required' => 'Status Pelanggan wajib diisi',
                'pel_id_user.required' => 'Id User wajib diisi'
            ]
        );

        $row = Pelanggan::findOrFail($id);
        $row->update([
            'pel_id_gol' => $request->pel_id_gol,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'pel_id_user' => $request->pel_id_user

        ]);

        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
