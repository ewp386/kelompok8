<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Http\Requests\StoreOrderRequest;
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Http\Request;

class OrderController extends Controller
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
            $order = Order::where('name','LIKE','%' .$request->search.'%')->with('supplier')->paginate(5);
        }else{
            $order = Order::with('supplier')->paginate(5);
        }
        
            return view('order.index',compact('order')); 
=======
        $order = Order::all();

        return view('order.index', compact('order'));
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
        $supplier = Supplier::all();
        return view('order.create', compact('supplier'));
=======
        return view('order.create');
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
<<<<<<< HEAD
=======

>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
        Order::create($request->all());
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
<<<<<<< HEAD
        $supplier = Supplier::all();;
        return view('order.edit', compact('supplier', 'order'));
=======
        return view('order.edit', compact('order'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
