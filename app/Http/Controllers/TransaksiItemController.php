<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiItemRequest;
use App\Http\Requests\UpdateTransaksiItemRequest;
use App\Models\TransaksiItem;
use Illuminate\Http\Request;

class TransaksiItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksiItem = TransaksiItem::all();

        return view('transaksiItem.index', compact('transaksiItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksiItem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiItemRequest $request)
    {

        TransaksiItem::create($request->all());
        return redirect()->route('transaksiItem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiItem  $transaksiItem
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiItem $transaksiItem)
    {
        return view('transaksiItem.show', compact('transaksiItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiItem  $transaksiItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiItem $transaksiItem)
    {
        return view('transaksiItem.edit', compact('transaksiItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiItem  $transaksiItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiItemRequest $request, TransaksiItem $transaksiItem)
    {
        $transaksiItem->update($request->all());
        return redirect()->route('transaksiItem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiItem  $transaksiItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiItem $transaksiItem)
    {
        $transaksiItem->delete();
        return redirect()->route('transaksiItem.index');
    }
}
