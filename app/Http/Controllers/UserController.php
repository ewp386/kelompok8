<?php

namespace App\Http\Controllers;

<<<<<<< HEAD:app/Http/Controllers/UserController.php
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
=======
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\Kategori;
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/UserController.php
        $user = User::all();

        return view('user.index', compact('user'));
=======
        $kategori = Kategori::all();

        return view('kategori.index', compact('kategori'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
<<<<<<< HEAD:app/Http/Controllers/UserController.php
    {   
        return view('user.create');
=======
    {
        return view('kategori.create');
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD:app/Http/Controllers/UserController.php
    public function store(StoreUserRequest $request)
    {
        
        User::create($request->all());
        return redirect()->route('user.index');
=======
    public function store(StoreKategoriRequest $request)
    {

        Kategori::create($request->all());
        return redirect()->route('kategori.index');
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
<<<<<<< HEAD:app/Http/Controllers/UserController.php
        return view('user.show', compact('user'));
=======
        return view('kategori.show', compact('kategori'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
<<<<<<< HEAD:app/Http/Controllers/UserController.php
        return view('user.edit', compact('user'));
=======
        return view('kategori.edit', compact('kategori'));
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD:app/Http/Controllers/UserController.php
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('user.index');
=======
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        $kategori->update($request->all());
        return redirect()->route('kategori.index');
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
<<<<<<< HEAD:app/Http/Controllers/UserController.php
        $user->delete();

        return redirect()->route('user.index');
=======
        $kategori->delete();
        return redirect()->route('kategori.index');
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633:app/Http/Controllers/KategoriController.php
    }
}
