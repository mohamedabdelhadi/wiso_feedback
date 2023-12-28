<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Ksnation;
use App\Models\openion;

class GestureSurveyController extends Controller
{
    public function index()
    {


        return view('feedback_dashboard');
    }

    public function dateExpression(Request $request)
    {
        $query = openion::query()->whereBetween('created_at', [$request->s, $request->e]);

        if ($request->tab_type == "tabletOne") {
            $query->where('aid', 1);
        } else if ($request->tab_type == "tabletTwo") {
            $query->where('aid', 2);
        } else if ($request->tab_type == "tabletThree") {
            $query->where('aid', 3);
        }

        $sources = $query->get()->groupBy('feedback')->map->count();

        return response()->json([
            'output' => $sources,
        ]);
    }




    public function paiage(Request $request)
    {
        $data_type = $request->data_type;

        if ($request->data_type == "wmdata"  && ($request->s == "" && $request->e == "")) {

            $sources =  openion::all()->whereBetween('age', [$request->sage, $request->eage])->groupBy('expressions');
        }
        $output = null;
        foreach ($sources as $key => $source) {
            foreach ($source as $item) {
            }
            $output[$key] = $source->count();
        }
        return response()->json([
            'output' => $output,
        ]);
    }


    public function getdata()
    {
        $sources =  openion::all()->groupBy('feedback');
        $output = array('1'=>0,'2'=>0,'3'=>0);
        foreach ($sources as $key => $source) {
            
            $output[$key] = $source->count();
        }
        // print_r($output);
        return response()->json([
            'output' => $output,
        ]);
        
    }

    public function mataratgettabdata()
    {
        $sources =  openion::all()->groupBy('aid');
        $output = array('1'=>0,'2'=>0,'3'=>0);
        foreach ($sources as $key => $source) {
            
            $output[$key] = $source->count();
        }
       
        return response()->json([
            'output' => $output,
        ]);
        
    }



    public function gettabonedata()
    {   
        $sources = openion::where('aid', 1)->get()->groupBy('feedback'); 
        $output = [];
        foreach ($sources as $key => $source) {
            $output[$key] = $source->count();
        }
    
        return response()->json([
            'output' => $output,
        ]);
        
    }

    public function gettabtwodata()
    {
        $sources = openion::where('aid', 2)->get()->groupBy('feedback');
        $output = array('1'=>0,'2'=>0,'3'=>0);
        foreach ($sources as $key => $source) {
            
            $output[$key] = $source->count();
        }
        // print_r($output);
        return response()->json([
            'output' => $output,
        ]);
        
    }

    public function gettabthreedata()
    {
        $sources = openion::where('aid', 3)->get()->groupBy('feedback'); 
        $output = array('1'=>0,'2'=>0,'3'=>0);
        foreach ($sources as $key => $source) {
            
            $output[$key] = $source->count();
        }
        // print_r($output);
        return response()->json([
            'output' => $output,
        ]);
        
    }

    public function excelAll()
    {
        $sources = openion::all(); 

        return response()->json([
            'output' => $sources,
        ]);
    }

    public function exceltabOne()
    {
        $sources = openion::where('aid', 1)->get(); 
        return response()->json([
            'output' => $sources,
        ]);
        
    }
    public function exceltabTwo()
    {
        $sources = openion::where('aid', 2)->get(); 
        return response()->json([
            'output' => $sources,
        ]);
        
    }
    public function exceltabThree()
    {
        $sources = openion::where('aid', 3)->get(); 
        return response()->json([
            'output' => $sources,
        ]);
        
    }


    public function excelgetData(Request $request)
    {
        $query = openion::query();
        
        if ($request->has('s') && $request->has('e')) {
            $query->whereBetween('created_at', [$request->s, $request->e]);
        }
        
        if ($request->has('tab_type')) {
            if ($request->tab_type == "tabletOne") {
                $query->where('aid', 1);
            } else if ($request->tab_type == "tabletTwo") {
                $query->where('aid', 2);
            } else if ($request->tab_type == "tabletThree") {
                $query->where('aid', 3);
            }
        }
    
        $sources = $query->get();
    
        return response()->json([
            'output' => $sources,
        ]);
    }
    
    

    public function getpdf()
    {
        return view('pdf');
    }
}
