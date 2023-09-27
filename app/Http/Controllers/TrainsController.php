<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index() {
        $date = date('Y-m-d');
        $trains = Train::whereDate('orario_di_partenza', $date)->orderby('orario_di_partenza', 'asc')->get();
        return view("home", ['trains' => $trains], ['date' => $date]);
    }
}
