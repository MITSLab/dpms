<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.kontak.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kontak = Kontak::all();
        return Datatables::of($kontak)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kontak) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('kontak.update', $kontak->id) .'`)" class="btn btn-soft-warning waves-effect waves-light mr-2"><i class="fa fa-edit"></i></button>
                    <button type="button" onclick="deleteData(`'. route('kontak.destroy', $kontak->id) .'`)" class="btn btn-soft-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontak = new Kontak();
        $kontak->nama = $request->nama;
        $kontak->telepon = $request->telepon;
        $kontak->kurs = $request->kurs;
        $kontak->tipe = $request->tipe;
        $kontak->jenis = $request->jenis;
        $kontak->klasifikasi = $request->klasifikasi;
        $kontak->npwp = $request->npwp;
        $kontak->keterangan = $request->keterangan;
        $kontak->save();

        return response()->json('Data berhasil berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontak = Kontak::find($id);

        return response()->json($kontak);
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
        $kontak = Kontak::find($id);
        $kontak->nama = $request->nama;
        $kontak->telepon = $request->telepon;
        $kontak->kurs = $request->kurs;
        $kontak->tipe = $request->tipe;
        $kontak->jenis = $request->jenis;
        $kontak->klasifikasi = $request->klasifikasi;
        $kontak->npwp = $request->npwp;
        $kontak->keterangan = $request->keterangan;
        $kontak->update();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id as $id) {
            $kontak = Kontak::find($id);
            $kontak->delete();
        }

        return response(null, 204);
    }

}
