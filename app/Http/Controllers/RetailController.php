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
<<<<<<< HEAD
        if($request->has('search')){
            $retail = Retail::where('name','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $retail = Retail::paginate(5);
        }
            return view('retail.index',compact('retail')); 
=======
        $retail = Retail::all();

        return view('retail.index', compact('retail'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
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
<<<<<<< HEAD
        
=======

>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
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
<<<<<<< HEAD
    public function update(UpdateRetailRequest $request, retail $retail)
=======
    public function update(UpdateRetailRequest $request, Retail $retail)
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
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
