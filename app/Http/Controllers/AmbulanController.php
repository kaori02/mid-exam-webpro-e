<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ambulan;
use App\Posko_Kesehatan;

class AmbulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambulan = Ambulan::all()->random();
        $posko = Posko_Kesehatan::find($ambulan->id_posko);

        return view('ambulans.index', compact('ambulan','posko'));
    }

    public function admin()
    {
        return view('ambulans.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ambulan = Ambulan::find($id);
        // return view('ambulans/show')->with('ambulan',$ambulan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ambulan = Ambulan::find($id);
        return view('ambulans/edit')->with('ambulan',$ambulan);
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
        $this->validate($request,[
            'id_posko' => 'required'
        ]);
        

        //create artikel
        $ambulan = Ambulan::find($id);
        $ambulan->id_posko = $request->input('id_posko');
        $ambulan->save();

        return redirect('/ambulans/admin')->with('Success',"Ambulan Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
