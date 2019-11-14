<?php

namespace App\Http\Controllers;

use App\PortCodes;
use App\Bl;
use App\Loading;
use App\Shipping;
use App\Vesselle;
use Illuminate\Support\Facades\Auth;

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

        $totalVessels = Vesselle::where('shipping_id', 1)
                                ->count();
        $totalBls = Bl::count();

        $totalNoPorts = PortCodes::select('id')
                        ->whereNotIn('id', Loading::select('port_id'))
                        ->orderBy('port_code', 'asc')
                        ->count();
        $user = Auth::user();

        return view('home', [
            'ships' => $totalShips,
            'vessels' => $totalVessels,
            'bls' => $totalBls,
            'ports' => $totalNoPorts,
        ], ['user' => $user]);
    }
}
