<?php

namespace App\Http\Controllers;

use App\Shipping;
use Illuminate\Http\Request;
use View;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shipping.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shippingLine' => 'required',
        ]);

        Shipping::create([
            'name' => $request->input('shippingLine'),
        ]);

        return view('shipping.index', [
            'insertStatus' => 1,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update confirmation of the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmEdit($id)
    {
        $shippingLine = Shipping::find($id);

        return view('shipping.edit', ['shippingLine' => $shippingLine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'shippingLine' => 'required',
        ]);

        $shippingLine = Shipping::find($id);

        $shippingLine->name = $request->input('shippingLine');

        $shippingLine->save();

        return view('shipping.index', ['updateStatus' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Removal confirmation of the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id)
    {
        $shippingLine = Shipping::find($id);

        return view('shipping.delete', ['shippingLine' => $shippingLine]);
    }
}
