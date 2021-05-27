<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return Pengguna::all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		return Pengguna::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Pengguna  $pengguna
	 * @return \Illuminate\Http\Response
	 */
	public function show(Pengguna $pengguna)
	{
		return Pengguna::find($pengguna->id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Pengguna  $pengguna
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Pengguna $pengguna)
	{
		return Pengguna::find($pengguna->id)->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Pengguna  $pengguna
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Pengguna $pengguna)
	{
		return Pengguna::destroy($pengguna->id);
	}
}
