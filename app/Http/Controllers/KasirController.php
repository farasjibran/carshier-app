<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;


class KasirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardkasir()
    {
        return view('parcial.kasir.dashboardkasir');
    }

    public function orderview()
    {
        $foods = Food::all();
        return view('parcial.kasir.orderview', ['food' => $foods]);
    }
}
