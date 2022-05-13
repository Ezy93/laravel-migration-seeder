<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $trains = DB::table('trains')
        ->where('departure_date', '>=', date('Y-m-d'))
        ->get();
        $data = [
            "train" => new Train(),
            "trains" => $trains,
        ];
        return view('trains.index', $data);
    }
}
