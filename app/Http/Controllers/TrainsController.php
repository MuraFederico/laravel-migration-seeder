<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use DateTime;

class TrainsController extends Controller
{
    public function todayTrains() {
        $trains = Train::paginate(5);
        // $today_trains = $trains->filter(function($train){
        //     if(DateTime::createFromFormat('Y-m-d H:i:s', $train->departure_time)->format('Y-m-d') === date('Y-m-d')){
        //         return $train;
        //     }
        // });
        return view('Trains', compact('trains'));
    }
}
