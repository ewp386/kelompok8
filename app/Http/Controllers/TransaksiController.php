<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
<<<<<<< HEAD
use App\Models\Retail;
=======
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
        if($request->has('search')){
            $transaksi = Transaksi::where('name','LIKE','%' .$request->search.'%')->with('retail')->paginate(5);
        }else{
            $transaksi = Transaksi::with('retail')->paginate(5);
        }
        
            return view('transaksi.index',compact('transaksi')); 
=======
        $transaksi = Transaksi::all();

        return view('transaksi.index', compact('transaksi'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $retail = Retail::all();
        return view('transaksi.create', compact('retail'));
=======
        return view('transaksi.create');
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiRequest $request)
    {
<<<<<<< HEAD
        
=======

>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
        Transaksi::create($request->all());
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
<<<<<<< HEAD
        $retail = Retail::all();
        return view('transaksi.edit', compact(['retail', 'transaksi']));
=======
        return view('transaksi.edit', compact('transaksi'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        $transaksi->update($request->all());
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
