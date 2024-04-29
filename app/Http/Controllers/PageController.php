<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function home()
    {



        $trains = Train::whereDate('giorno_di_partenza', Carbon::now())->get();


        //$trains = Train::all();

        return view('home', compact('trains'));
    }
}
