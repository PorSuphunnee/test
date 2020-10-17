<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListDetail extends Controller
{
    //
    function list(){
        $data = Http::get('https://api.spacexdata.com/v4/crew')->json();

        return view('ListDetail',['data'=>$data]);
    }

//     function rockets(){
//         $rockets = Http::get('https://api.spacexdata.com/v4/rockets')->json();
//
//         return view('ListDetail',['rockets'=>$rockets]);
//     }
//     function launches(){
//         $launches = Http::get('https://api.spacexdata.com/v4/launches')->json();
//
//         return view('ListDetail',['launches'=>$launches]);
//     }
//     function capsules(){
//         $capsules = Http::get('https://api.spacexdata.com/v4/capsules')->json();
//
//         return view('ListDetail',['capsules'=>$capsules]);
//     }





}
