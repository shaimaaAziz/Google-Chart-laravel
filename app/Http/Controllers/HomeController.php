<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
// use Charts;
use ConsoleTVs\Charts\Charts;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = City::withcount('hospitals')->get();
        //dd($cities);
        return view('home',compact('cities'));

        // $chart = Charts::database($cities, 'bar', 'highcharts')

		// 	      ->title("Monthly new Register Users")

		// 	      ->elementLabel("Total Users")

		// 	      ->dimensions(1000, 500)

		// 	      ->responsive(false)

		// 	      ->groupByMonth(date('Y'), true);
    }
}
