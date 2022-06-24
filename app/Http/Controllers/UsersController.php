<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Users::all();
        
        return view('users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
                'user_nama' => 'required',
                'user_email' => 'bail|required|unique:tb_users',
                'user_password' => 'required',
'user_alamat' => 'required',
'user_hp' => 'required',
'user_pos' => 'required',
'user_role' => 'required',
'user_aktif' => 'required'


            ],
            [
'user_nama' => 'isi!',
'user_email' => 'isi!',
'user_password' => 'isi!',
'user_alamat' => 'isi!',
'user_hp' => 'isi!',
'user_pos' => 'isi!',
'user_role' => 'isi!',
'user_aktif' => 'isi!'
            ]
        );

        users::create([
'user_nama' => $request->user_nama,
'user_email' => $request->user_email,
'user_password' => $request->user_password,
'user_alamat' => $request->user_alamat,
'user_hp' => $request->user_hp,
'user_pos' => $request->user_pos,
'user_role' => $request->user_role,
'user_aktif' => $request->user_aktif,
        ]);

        return redirect('users');
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
        $row = Users::findOrFail($id);
        return view('users.edit', compact('row'));
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
                'user_nama' => 'required',
                'user_email' => 'bail|required|unique:tb_users',
                'user_password' => 'required',
'user_alamat' => 'required',
'user_hp' => 'required',
'user_pos' => 'required',
'user_role' => 'required',
'user_aktif' => 'required'
            ],
            [
'user_nama' => 'isi!',
'user_email' => 'isi!',
'user_password' => 'isi!',
'user_alamat' => 'isi!',
'user_hp' => 'isi!',
'user_pos' => 'isi!',
'user_role' => 'isi!',
'user_aktif' => 'isi!'
            ]
        );

        $row = Users::findOrFail($id);
        $row->update([
'user_nama' => $request->user_nama,
'user_email' => $request->user_email,
'user_alamat' => $request->user_alamat,
'user_hp' => $request->user_hp,
'user_pos' => $request->user_pos,
'user_role' => $request->user_role,
'user_aktif' => $request->user_aktif,

        ]);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Users::findOrFail($id);
        $row->delete();

        return redirect('users');
    }
}
