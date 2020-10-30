<?php

namespace App\Http\Controllers;

use App\Ambulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Posko_Kesehatan;
class PoskoKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    public function index()
    {
        $poskos = Posko_Kesehatan::all();
        return view('poskos.index')->with('poskos',$poskos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poskos/create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_posko' =>'required',
            'alamat_kesehatan' =>'required',
            'no_telp_kesehatan' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        if ($request->hasFile('cover_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create posko
        $posko = new Posko_Kesehatan;
        $posko->nama_posko = $request->input('nama_posko');
        $posko->alamat_kesehatan = $request->input('alamat_kesehatan');
        $posko->no_telp_kesehatan = $request->input('no_telp_kesehatan');
        $posko->lat = $request->input('lat');
        $posko->lng = $request->input('lng');
        $posko->cover_image = $fileNameToStore;
        $posko->save();

        return redirect('poskos/admin')->with('Success', "Posko Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posko = Posko_Kesehatan::find($id);
        return view('poskos/show')->with('posko', $posko);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posko = Posko_Kesehatan::find($id);

        return view('poskos/edit')->with('posko', $posko);
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
        $this->validate($request, [
            'nama_posko' =>'required',
            'alamat_kesehatan' =>'required',
            'no_telp_kesehatan' => 'required'
        ]);

        if ($request->hasFile('cover_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        //create posko
        $posko = Posko_Kesehatan::find($id);
        $posko->nama_posko = $request->input('nama_posko');
        $posko->alamat_kesehatan = $request->input('alamat_kesehatan');
        $posko->no_telp_kesehatan = $request->input('no_telp_kesehatan');
        $posko->lat = $request->input('lat');
        $posko->lng = $request->input('lng');
        if ($request->hasFile('cover_image')) {
            $posko->cover_image = $fileNameToStore;
        }
        $posko->save();

        return redirect('poskos/admin')->with('Success', "Posko Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posko = Posko_Kesehatan::find($id);
        $ambulans = Ambulan::join('posko__kesehatans', 'posko__kesehatans.id_posko', '=', 'ambulans.id_posko')
        ->select('*')->orderBy('NoPol', 'asc')
        ->get();


        if (count($ambulans) > 0) {
            return redirect('ambulans/admin')->with('Error','Masih ada ambulan yang terhubung');
        }

        if ($posko->cover_image != 'noimage.jpg') {
            //delete image
            Storage::delete('public/cover_images/' . $posko->cover_image);
        }


        $posko->delete();
        return redirect('poskos/admin')->with('Success', "Posko Terhapus");
    }

    public function admin()
    {
        $poskos = Posko_Kesehatan::orderBy('nama_posko', 'asc')->paginate(7);
        return view('poskos/admin', compact('poskos'));
    }
    // public funtion search(){

    // }
}
