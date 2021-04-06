<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uom;
use DataTables;

class UomProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.uom_produk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uom = Uom::all();
        return Datatables::of($uom)
            ->addIndexColumn()
            ->addColumn('select_all', function ($uom) {
                return '
                    <input type="checkbox" name="id[]" value="'. $uom->id .'">
                ';
            })
            ->addColumn('aksi', function ($uom) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('produk.uom.update', $uom->id) .'`)" class="btn btn-soft-warning waves-effect waves-light mr-2"><i class="fa fa-edit"></i></button>
                    <button type="button" onclick="deleteData(`'. route('produk.uom.destroy', $uom->id) .'`)" class="btn btn-soft-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['select_all','aksi'])
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
        $uom = new Uom();
        $uom->nama = $request->nama;
        $uom->keterangan = $request->keterangan;
        $uom->save();

        return response()->json('Kategori produk berhasil dibuat', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uom = Uom::find($id);

        return response()->json($uom);
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
        $uom = Uom::find($id);
        $uom->nama = $request->nama;
        $uom->keterangan = $request->keterangan;
        $uom->update();

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
        $uom = Uom::find($id);
        $uom->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id as $id) {
            $uom = Uom::find($id);
            $uom->delete();
        }

        return response(null, 204);
    }
}
