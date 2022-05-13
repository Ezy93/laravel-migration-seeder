<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            "train" => new Train(),
        ];
        return view('trains.index', $data);
    }
}
