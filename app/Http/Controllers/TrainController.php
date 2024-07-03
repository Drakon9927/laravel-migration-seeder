<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        dd('Index method is reached');  // Debug tattico
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }
}