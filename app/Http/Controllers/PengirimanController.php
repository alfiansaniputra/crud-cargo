<?php

namespace App\Http\Controllers;
use App\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengirimans = Pengiriman::all();
         return view('pengiriman.index',['pengiriman' => $pengirimans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengiriman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'idbarang' => 'required', 'idkurir' => 'required', 'tujuan' => 'required' , 'tglsampai' => 'required'
        ]);
        
        $pengiriman = new Pengiriman;
        $pengiriman->idbarang = $request->idbarang;
        $pengiriman->idkurir = $request->idkurir;
        $pengiriman->tujuan = $request->tujuan;
        $pengiriman->tglsampai = $request->tglsampai;
        $pengiriman->save();
        return redirect('pengiriman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengiriman = Pengiriman::find($id);

        return view('pengiriman.singgle')->with('pengiriman',$pengiriman);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        if(!$pengiriman){
            abort(404);
        }
        
        return view('pengiriman.edit')->with('pengiriman', $pengiriman);
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
           'idbarang' => 'required', 'idkurir' => 'required', 'tujuan' => 'required' , 'tglsampai' => 'required'
        ]);
        
        $pengiriman = Pengiriman::find($id);
        $pengiriman->idbarang = $request->idbarang;
        $pengiriman->idkurir = $request->idkurir;
        $pengiriman->tujuan = $request->tujuan;
        $pengiriman->tglsampai = $request->tglsampai;
        $pengiriman->save();
        return redirect('pengiriman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pengiriman = Pengiriman::find($id);
        $pengiriman ->delete();
        return redirect('pengiriman');
    }
}
