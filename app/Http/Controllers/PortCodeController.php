<?php

namespace App\Http\Controllers;

use App\Loading;
use App\PortCodes;
use Illuminate\Http\Request;


class PortCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $port = PortCodes::select('port_code', 'port_city', 'id')
                            ->whereNotIn('id', Loading::select('port_id'))
                            ->orderBy('port_code', 'asc')
                            ->paginate(6);

        return view('port.index', ['ports' => $port]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upgradePorts($id)
    {
        $port = PortCodes::select('port_code', 'port_city', 'id')
                            ->where('id', $id)
                            ->get();

        return view('port.update-loading-port', ['ports' => $port]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upgradePort(Request $request, $id)
    {
        Loading::create([
            'port_id' => $id,
            'place' => $request->get('place'),
            'country' => $request->get('country'),
            'cluster' => $request->get('cluster'),
            'route' => $request->get('route'),
        ]);

        $request->session()->flash('updateStatus', 1);

        return redirect()->route('port-codes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
}
