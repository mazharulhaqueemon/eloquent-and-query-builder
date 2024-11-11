<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\QuaryBuilder;
use Illuminate\Support\Facades\DB;
class QuaryBuilderController extends Controller
//  this function is used for quaries not elequent . 
{
    public function queries(){
        // get all the data from quarybuilders table 
        // $quarybuilder= DB::table("quarybuilders")->get();
        $quarybuilder=DB::table("quarybuilders")
        ->where('phone', 'like', '017%')
        ->get();
        return view("quarybuilder",compact('quarybuilder'));
    
    }
}
