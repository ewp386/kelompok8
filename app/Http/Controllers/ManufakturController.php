<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManufakturRequest;
use App\Http\Requests\UpdateManufakturRequest;
use App\Models\Manufaktur;
use Illuminate\Http\Request;

class ManufakturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufaktur= Manufaktur::all();

        return view('manufaktur.index', compact('manufaktur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufaktur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManufakturRequest $request)
    {

        Manufaktur::create($request->all());
        return redirect()->route('manufaktur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function show(Manufaktur $manufaktur)
    {
        return view('manufaktur.show', compact('manufaktur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufaktur $manufaktur)
    {
        return view('manufaktur.edit', compact('manufaktur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManufakturRequest $request, Manufaktur $manufaktur)
    {
        $manufaktur->update($request->all());
        return redirect()->route('manufaktur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufaktur $manufaktur)
    {
        $manufaktur->delete();
        return redirect()->route('manufaktur.index');
    }
}
