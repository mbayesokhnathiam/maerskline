<?php

namespace App\Http\Controllers;

use App\Bl;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class BlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $startDate = date('Y-m-d', strtotime($request->get('startdate') ?  $request->get('startdate') : '1970-01-01'));
        $endDate = date('Y-m-d', strtotime($request->get('endate') ?  $request->get('endate') : Carbon::now()));

        // dd($startDate);

        $bls = !$startDate ? Bl::paginate(6) : Bl::whereBetween('arrival_date', [$startDate, $endDate])->paginate(6);
        return view('bl.index', ['bls' => $bls]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $bl = Bl::find($id);
        return view('bl.detail', ['bl' => $bl]);
    }

    /**
     * Display a listing of the resource between two date.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $startDate = date('Y-m-d H:m:s', strtotime($request->get('startdate')));
        $endDate = date('Y-m-d H:m:s', strtotime($request->get('endate')));

        // dd(date('Y-m-d H:m:s', strtotime($request->get('startdate'))));
        $bls = Bl::whereBetween('arrival_date', [$startDate, $endDate])->paginate(6);

        // dd($bls);

        return view('bl.index', ['bls' => $bls]);
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
