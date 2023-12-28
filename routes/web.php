<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KsnattionController;
use App\Http\Controllers\SelfieMirrorController;
use App\Http\Controllers\GestureSurveyController;
use App\Http\Controllers\WisoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/wiso',[WisoController::class,'index']);
Route::get('/get_wiso_data',[WisoController::class,'get_wiso_data']);
Route::get('/get_language_data',[WisoController::class,'get_language_data']);
Route::get('/get_survey_data',[WisoController::class,'get_survey_data']);
Route::get('/get_finfo_data',[WisoController::class,'get_finfo_data']);


Route::get('/feedback',[GestureSurveyController::class,'index']);






Route::get('/mataratgetexpression',[GestureSurveyController::class,'getdata']);
Route::get('/mataratbtwexpression',[GestureSurveyController::class,'dateExpression']);
Route::get('/mataratpaiexpression',[GestureSurveyController::class,'paiage']);
Route::get('/gettabonedata',[GestureSurveyController::class,'gettabonedata']);
Route::get('/gettabtwodata',[GestureSurveyController::class,'gettabtwodata']);
Route::get('/gettabthreedata',[GestureSurveyController::class,'gettabthreedata']);
Route::get('/mataratgettabdata',[GestureSurveyController::class,'mataratgettabdata']);
Route::get('/excelAll',[GestureSurveyController::class,'excelAll']);
Route::get('/excelgetData',[GestureSurveyController::class,'excelgetData']);

Route::get('/register',[RegisterController::class,'index']);
// Route::get('/chart',[RegisterController::class,'chart']);
Route::post('/register',[RegisterController::class,'register'])->name('register');

// Route::get('/index',[KsnattionController::class,'index']);
Route::group(['middleware' => 'prevent-back-history'],function(){
Route::get('/getexpression',[KsnattionController::class,'getdata']);
Route::get('/noframesgetexpression',[KsnattionController::class,'noframegetdata']);
Route::get('/agecategory',[KsnattionController::class,'ageCount']);
Route::get('/womenexpression',[KsnattionController::class,'getwomen']);
Route::get('/menexpression',[KsnattionController::class,'getmen']);
Route::get('/btwexpression',[KsnattionController::class,'dateExpression']);
Route::get('/paiexpression',[KsnattionController::class,'paiage']);
Route::get('/frameData',[KsnattionController::class,'frameData']);
Route::get('/fetchFramelist',[KsnattionController::class,'fetchFramelist']);
Route::post('/updateFrameStatus/{id}', [KsnattionController::class, 'updateFrameStatus']);
Route::post('/delFrame/{id}', [KsnattionController::class, 'delFrame']);

// Route::get('/pdfchart',[KsnattionController::class,'getpdf']);

Route::get('/dashboard',[LoginController::class,'dashboard']);

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/upload-image', [KsnattionController::class, 'uploadFrame'])->name('upload-image');
Route::get('/getFrames', [KsnattionController::class, 'getFrames'])->name('getFrames');

Route::get('/selfie',[SelfieMirrorController::class,'selfie']);
Route::post('/send-Selfiesas', [SelfieMirrorController::class, 'sendSelfiesas'])->name('send-Selfiesas');




});
