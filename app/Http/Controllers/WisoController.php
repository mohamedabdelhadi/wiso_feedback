<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\robot_usage;
use App\Models\survey;
use App\Models\flight_usage;
use Illuminate\Support\Facades\DB;

class WisoController extends Controller
{
    public function index()
    {
        return view('visio_dashboard');
    }


    
    public function get_wiso_data(Request $request){

        if($request->s != "" && $request->e !=""){
            
            $sources = robot_usage::all()->whereBetween('CREATED_AT', [$request->s, $request->e])->groupBy('name');

        }else{
            $sources = robot_usage::all()->groupBy('name');
        }
       
    
        $output = [];
        foreach ($sources as $key => $source) {
            $output[$key] = $source->count();
        }
    
        
        return response()->json($output);
    }



    
    

    

    public function get_language_data(Request $request){

        if($request->s != "" && $request->e !=""){
            
            $sources = robot_usage::all()->whereBetween('CREATED_AT', [$request->s, $request->e])->groupBy('lang');

        }else{
            $sources = robot_usage::all()->groupBy('lang');
        }
    
        $output = [];
        foreach ($sources as $key => $source) {
            $output[$key] = $source->count();
        }
        
        return response()->json($output);
    }

    public function get_survey_data(Request $request){

    
        if($request->s != "" && $request->e !=""){
            
            $sources = survey::all()->whereBetween('created_at', [$request->s, $request->e])->groupBy('satisfaction');

        }else{
            $sources = survey::all()->groupBy('satisfaction');
        }
        $output = [];
        foreach ($sources as $key => $source) {
            $output[$key] = $source->count();
        }
        
        return response()->json($output);
    }

    public function get_finfo_data(Request $request){

       

        if($request->s != "" && $request->e !=""){
            
            $sources = flight_usage::all()->whereBetween('Date_Time', [$request->s, $request->e])->groupBy('method');

        }else{
            $sources = flight_usage::all()->groupBy('method');
        }
        // $sources = flight_usage::all()->groupBy('method');
        $output = [];
        foreach ($sources as $key => $source) {
            $output[$key] = $source->count();
        }
    
        return response()->json($output);
    }
    

    

}
