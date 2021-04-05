<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KategoriUser;
use App\Models\Role;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_user = KategoriUser::all();
        $role = Role::all();
        return view('sistem.user.index', compact('role', 'kategori_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::with('kategoriuser', 'role')
                ->get();

        return Datatables::of($user)
            ->addIndexColumn()
            ->addColumn('select_all', function ($user) {
                return '
                    <input type="checkbox" name="id[]" value="'. $user->id .'">
                ';
            })
            ->addColumn('aksi', function ($user) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('admin.users.update', $user->id) .'`)" class="btn btn-soft-warning waves-effect waves-light mr-2"><i class="fa fa-edit"></i></button>
                    <button type="button" onclick="deleteData(`'. route('admin.users.destroy', $user->id) .'`)" class="btn btn-soft-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['select_all', 'aksi'])
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

        $request->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nama = $request->nama;
        $user->password = bcrypt('$request->password');
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->kode_pos = $request->kode_pos;
        $user->kota = $request->kota;
        $user->path_foto = $request->path_foto;
        $user->role_id = $request->role_id;
        $user->kategori_user_id = $request->kategori_user_id;
        $user->is_active = $request->is_active;
        $user->save();

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
        $user = User::find($id);

        return response()->json($user);
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
        $user = User::find($id);

        if($request->password)  {
            $request->validate([
                'password' => 'required|string|confirmed|min:8',
            ]);
            $user->password = bcrypt('$request->password');
        }
        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nama = $request->nama;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->kode_pos = $request->kode_pos;
        $user->kota = $request->kota;
        $user->path_foto = $request->path_foto;
        $user->role_id = $request->role_id;
        $user->kategori_user_id = $request->kategori_user_id;
        $user->is_active = $request->is_active;
        $user->update();

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
        $user = User::find($id);
        $user->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id as $id) {
            $user = User::find($id);
            $user->delete();
        }

        return response(null, 204);
    }
}
