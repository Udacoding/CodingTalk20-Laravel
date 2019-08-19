<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = MahasiswaModel::all();
        return view('mahasiswa.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }


    public function tambah()
    {
        return view('mahasiswa.tambahmhs');
    }


    public function create(Request $request)
    {
        $this->validate($request, [

            'nim' => 'numeric||min:5',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
        ]);

        MahasiswaModel::create($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.editmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil di Update!');
    }

    public function delete($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil dihapus!');
    }
}
