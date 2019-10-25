<?php

namespace App\Http\Controllers;

use App\Bl;
use App\Shipping;
use App\Vesselle;
use Illuminate\Support\Facades\Auth;
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
        $totalShips = Shipping::count();
        $totalVessels = Vesselle::count();
        $totalBls = Bl::count();
        $user = Auth::user();

        return view('home', [
            'ships' => $totalShips,
            'vessels' => $totalVessels,
            'bls' => $totalBls
        ], ['user' => $user]);
    }
}
