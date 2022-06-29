<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRetailRequest;
use App\Http\Requests\UpdateRetailRequest;
use App\Models\Retail;
use Illuminate\Http\Request;

class RetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retail = Retail::all();

        return view('retail.index', compact('retail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRetailRequest $request)
    {

        Retail::create($request->all());
        return redirect()->route('retail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function show(Retail $retail)
    {
        return view('retail.show', compact('retail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function edit(Retail $retail)
    {
        return view('retail.edit', compact('retail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRetailRequest $request, Retail $retail)
    {
        $retail->update($request->all());
        return redirect()->route('retail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retail $retail)
    {
        $retail->delete();
        return redirect()->route('retail.index');
    }
}
