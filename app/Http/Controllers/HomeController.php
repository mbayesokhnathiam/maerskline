<?php

namespace App\Http\Controllers;

use App\Bl;
use App\Shipping;
use App\Vesselle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_ships = Shipping::count();
        $total_vessels = Vesselle::count();
        $total_bls = Bl::count();

        return view('home', [
                            'ships' => $total_ships,
                            'vessels' => $total_vessels,
                            'bls' => $total_bls
        ]);
    }
}
