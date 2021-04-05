<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurir;
use DataTables;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.kurir.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurir = Kurir::all();
        return Datatables::of($kurir)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kurir) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('kontak.kurir.update', $kurir->id) .'`)" class="btn btn-soft-warning waves-effect waves-light mr-2"><i class="fa fa-edit"></i></button>
                    <button type="button" onclick="deleteData(`'. route('kontak.kurir.destroy', $kurir->id) .'`)" class="btn btn-soft-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
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
        $kurir = new Kurir();
        $kurir->nama = $request->nama;
        $kurir->telepon = $request->telepon;
        $kurir->alamat = $request->alamat;
        $kurir->save();

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
        $kurir = Kurir::find($id);

        return response()->json($kurir);
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
        $kurir = Kurir::find($id);
        $kurir->nama = $request->nama;
        $kurir->telepon = $request->telepon;
        $kurir->alamat = $request->alamat;
        $kuri->update();

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
        $kurir = Kurir::find($id);
        $kurir->delete();

        return response(null, 204);
    }
}
