<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriUser;
use DataTables;

class KategoriUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sistem.kategori_user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipe = KategoriUser::all();
        return Datatables::of($tipe)
            ->addIndexColumn()
            ->addColumn('aksi', function ($tipe) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('admin.kategori-user.update', $tipe->id) .'`)" class="btn btn-soft-warning waves-effect waves-light mr-2"><i class="fa fa-edit"></i></button>
                    <button type="button" onclick="deleteData(`'. route('admin.kategori-user.destroy', $tipe->id) .'`)" class="btn btn-soft-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
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
        $tipe = new KategoriUser();
        $tipe->nama = $request->nama;
        $tipe->keterangan = $request->keterangan;
        $tipe->save();

        return response()->json('Data berhasil dibuat', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipe = KategoriUser::find($id);

        return response()->json($tipe);
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
        $tipe = KategoriUser::find($id);
        $tipe->nama = $request->nama;
        $tipe->keterangan = $request->keterangan;
        $tipe->update();

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
        $tipe = KategoriUser::find($id);
        $tipe->delete();

        return response(null, 204);
    }
}
