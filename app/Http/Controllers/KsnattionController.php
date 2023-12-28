<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Ksnation;
use App\Models\Frames;
class KsnattionController extends Controller
{
    public function index(){


         return view('index');
    }
    
    public function dateExpression(Request $request){
        $data_type=$request->data_type;
        if($data_type == "wmdata"){
            $sources =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->groupBy('expressions');
        }else{
            $sources =  Ksnation::all()->where('f_id',$request->f_id)->where('gender','=',$request->$data_type)->whereBetween('created_at', [$request->s, $request->e])->groupBy('expressions');
        }
        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {
            }
            $output[$key] = $source->count();
        }
        return response()->json([
            'output'=>$output,
        ]);
    }


    public function paiage(Request $request){
        $data_type=$request->data_type;

        if($request->data_type == "wmdata"  && ($request->s =="" && $request->e =="")){

            $sources =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('age', [$request->sage, $request->eage])->groupBy('expressions');

        }else  if($request->data_type == "wmdata"  && ($request->s !="" && $request->e !="")){

            $sources =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->whereBetween('age', [$request->sage, $request->eage])->groupBy('expressions');

        } else if(($request->data_type == "Female" || $request->data_type == "Male") && ($request->s =="" && $request->e =="")){

            $sources =  Ksnation::all()->where('f_id',$request->f_id)->where('gender',$request->data_type)->whereBetween('age', [$request->sage, $request->eage])->groupBy('expressions');

        }else if(($request->data_type == "Female" || $request->data_type == "Male") && ($request->s !="" && $request->e!="")){

            $sources =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->where('gender',$request->data_type)->whereBetween('age', [$request->sage, $request->eage])->groupBy('expressions');


        }
        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {
            }
            $output[$key] = $source->count();
        }
        return response()->json([
            'output'=>$output,
        ]);
    }


    public function getdata(Request $request){
        $sources =  Ksnation::all()->where('f_id',$request->f_id)->groupBy('expressions');

        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {
                // echo $item;
            }
            $output[$key] = $source->count();

        }
        // print_r($output);
        return response()->json([
            'output'=>$output,
        ]);


    }
    public function noframegetdata(Request $request){
        $sources =  Ksnation::all()->groupBy('expressions');

        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {
                // echo $item;
            }
            $output[$key] = $source->count();

        }
        // print_r($output);
        return response()->json([
            'output'=>$output,
        ]);


    }

    public function ageCount(Request $request){

        if($request->data_type == "wmdata"  && ($request->s =="" && $request->e =="")){
            $g1 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('age', [18,25])->count();
            $g2 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('age', [26,40])->count();
            $g3 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('age', [41,60])->count();
        }else if($request->data_type == "wmdata"  && $request->s !="" && $request->e !=""){
            $g1 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->whereBetween('age', [18,25])->count();
            $g2 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->whereBetween('age', [26,40])->count();
            $g3 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->whereBetween('age', [41,60])->count();
        }
        else if(($request->data_type == "Female" || $request->data_type == "Male") && ($request->s =="" && $request->e =="")){
            $g1 =  Ksnation::all()->where('f_id',$request->f_id)->where('gender',$request->data_type)->whereBetween('age', [18,25])->count();
            $g2 =  Ksnation::all()->where('f_id',$request->f_id)->where('gender',$request->data_type)->whereBetween('age', [26,40])->count();
            $g3 =  Ksnation::all()->where('f_id',$request->f_id)->where('gender',$request->data_type)->whereBetween('age', [41,60])->count();
        }else if(($request->data_type == "Female" || $request->data_type == "Male") && ($request->s !="" && $request->e!="")){
            $g1 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->where('gender',$request->data_type)->whereBetween('age', [18,25])->count();
            $g2 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->where('gender',$request->data_type)->whereBetween('age', [26,40])->count();
            $g3 =  Ksnation::all()->where('f_id',$request->f_id)->whereBetween('created_at', [$request->s, $request->e])->where('gender',$request->data_type)->whereBetween('age', [41,60])->count();
        }

         $output = array($g1, $g2, $g3);
        // $output = json_encode($arr);
        return response()->json([
                'output'=>$output,
        ]);

    }
    public function getwomen(Request $request){

        $sources =  Ksnation::all()->where('gender','=','Female')->where('f_id','=',$request->f_id)->groupBy('expressions');
        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {

            }
            $output[$key] = $source->count();

        }

        return response()->json([
            'output'=>$output,
        ]);
    }

    public function getmen(Request $request){

        $sources =  Ksnation::all()->where('gender','=','Male')->where('f_id','=',$request->f_id)->groupBy('expressions');
        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {

            }
            $output[$key] = $source->count();

        }

        return response()->json([
            'output'=>$output,
        ]);
    }


    // frame Data


    public function frameData(Request $request){
        if($request->data_type == "wmdata"){
            $sources =  Ksnation::all()->where('f_id','=',$request->f_id)->groupBy('expressions');
        }else{
            $sources =  Ksnation::all()->where('f_id','=',$request->f_id)->where('gender','=',$request->data_type)->groupBy('expressions');
        }
        
        $output = null;
        foreach($sources as $key => $source) {
            foreach($source as $item) {

            }
            $output[$key] = $source->count();

        }

        return response()->json([
            'output'=>$output,
        ]);
    }

    public function getFrames()
    {
        $Frames = Frames::where('status', 'visible')->get(); // Assuming you have an 'Image' model
        return response()->json(['frames' => $Frames]);
    }
    public function fetchFramelist(){
        $Frames = Frames::all(); // Assuming you have an 'Image' model
        return response()->json(['frames' => $Frames]);
    }

    public function updateFrameStatus(Request $request, $id) {
        $frame = Frames::find($id);
        if (!$frame) {
            return response()->json(['error' => 'Frame not found'], 404);
        }
    
        $newStatus = $request->input('newStatus');
        // You can also use $request->newStatus;
    
        $frame->status = $newStatus;
        $frame->save();
    
        return response()->json(['message' => 'Frame status updated successfully']);
    }
    public function delFrame($id) {
        $frame = Frames::find($id);

        if (!$frame) {
            return response()->json(['error' => 'Frame not found'], 404);
        }
    
        $frame->delete();
    
        return response()->json(['message' => 'Frame deleted successfully']);
    }
    
    


    public function uploadFrame(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('filters'), $imageName);

            // Save the image information to the database
            $imageModel = new Frames();
            $imageModel->fname = $imageName;
            $imageModel->save();

            return response()->json(['success' => true, 'image_name' => $imageName]);
        }

        return response()->json(['success' => false, 'message' => 'Image upload failed.']);
    }

    public function getpdf(){
        return view('pdf');
    }



}
