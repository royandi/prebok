<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_user = \App\User::where('nama_depan','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_user = \App\user::all();
        }
        $data_user = \App\user::all();
        return view('user.index',['data_user' => $data_user]);
    }

    public function create(Request $request)
    {
        \App\User::create($request->all());
        return redirect('user')->with('sukses','data berhasil diinput');
    }

    public function edit($id)
    {
        $user = \App\User::find($id);
        return view('user/edit',['user' => $user]);
    }

    public function update(Request $request,$id)
    {
        $user = \App\User::find($id);
        $user->update($request->all());
        return redirect('/user')->with('sukses','data berhasil diupdate');
    }

    public function delete($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('/user')->with('sukses','data berhasil dihapus');
    }
}
