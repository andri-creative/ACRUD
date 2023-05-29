<?php

namespace App\Http\Controllers;

use App\Models\Andri;
use Illuminate\Http\Request;

class AndriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Andri::get();
        return view('/welcome', ['data'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

        if (Andri::where('nbi', $request->nbi)->count() > 0) {
            return redirect('/')->with('error', 'NBI sudah digunakan');
        }

        // $validator = $request->validate([
        //     "nbi" => "required|unique:andri",
        // ]);
        
       
        Andri::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nbi' => $request->nbi,
            'alamat' => $request->alamat
        ]);

        return redirect('/')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Andri::where('id', $id)->get();

        return view('edit', ['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $upda = Andri::where('id', $id)->update(
            [
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'nbi' => $request->nbi,
                'alamat' => $request->alamat
            ]
        );

        return redirect('/')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Andri::where('id', $id)->delete();

        return redirect('/')->with('success', 'Data berhasil di hapus');
    }
}
