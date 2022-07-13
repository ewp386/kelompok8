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
    public function index(Request $request)
    {
        if($request->has('search')){
            $retail = Retail::where('id_retail','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $retail = Retail::paginate(5);
        }
            return view('retail.index',compact('retail')); 
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
     * @param  \App\Models\retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function show(retail $retail)
    {
        return view('retail.show', compact('retail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function edit(retail $retail)
    {
        return view('retail.edit', compact('retail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRetailRequest $request, retail $retail)
    {
        $retail->update($request->all());
        return redirect()->route('retail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\retail  $retail
     * @return \Illuminate\Http\Response
     */
    public function destroy(retail $retail)
    {
        $retail->delete();
        return redirect()->route('retail.index');
    }
}
