<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        //menampilkan data
        $kategoris  = Kategori::all();
        //function compact buat nampilin variabel ke view
        return view('home', compact('kategoris'));
    }

    public function store(Request $request)
    {
        //get data ===========
        // echo "store";
        // echo $request->kategori;

        //validation =========
        $this->validate($request, [
            'kategori'=>'required|max:30',
        ]);

        //insert ==========
        // $kategori = new Kategori();

        // $kategori->kategori = $request->kategori;

        // $kategori->save();

        //upload file ========
        $nameFile = $request->file('img')->getClientOriginalName();
        $request->img->move(public_path('images') , $nameFile);
        dd('Sukses');

        return redirect('/');
    }

    public function update($id, Request $request)
    {
        $kategoris = [
            'kategori' => $request->kategori,
        ];

        Kategori::where('idkategori', $id)
                ->update($kategoris);

        return redirect('/');
    }

    public function destroy($id, Request $request) {
        Kategori::where('idkategori', $id)->delete();

        return redirect('/');
    }
}
