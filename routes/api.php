<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WidgetController;
use App\Http\Controllers\MethodsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QuestionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('widgets',WidgetController::class);
//Route::resource('methods',MethodsController::class);

//Public Route

    //Auth Routes
Route::post('/register', [AuthController::class,'register']);
Route::post('/login'    , [AuthController::class,'login']);

    //Widgets Routes
Route::get('/widgets', [WidgetController::class,'index']);
Route::get('/widget/{id}', [WidgetController::class,'show']);
Route::get('/widget/search/{name}', [WidgetController::class,'search']);

    //Methods Routes
Route::get('/methods', [MethodsController::class,'index']);
Route::get('/method/{id}', [MethodsController::class,'show']);
Route::get('/method/search/{name}', [MethodsController::class,'search']); 

    //News Routes
Route::get('/news', [NewsController::class,'index']);
Route::get('/news/{id}', [NewsController::class,'show']);
Route::get('/news/search/{name}', [NewsController::class,'search']); 

//Questions Routes
Route::get('/questions', [QuestionController::class,'index']);
Route::get('/question/{id}', [QuestionController::class,'show']);
Route::get('/question/search/{name}', [QuestionController::class,'search']); 

//Protected Route
Route::group(['middleware'=>['auth:sanctum']], function () {
   
    //Auth Routes
    Route::post('/logout', [AuthController::class, 'logout']);
    
    //Widgets Routes
    Route::post('/widget', [WidgetController::class,'store']);
    Route::put('/widget/{id}', [WidgetController::class,'update']);
    Route::delete('/widget/{id}', [WidgetController::class,'destroy']);
    
    //Methods Routes
    Route::post('/method', [MethodsController::class,'store']);
    Route::put('/method/{id}', [MethodsController::class,'update']);
    Route::delete('/method/{id}', [MethodsController::class,'destroy']);

    //News Routes
    Route::post('/news', [NewsController::class,'store']);
    Route::put('/news/{id}', [NewsController::class,'update']);
    Route::delete('/news/{id}', [NewsController::class,'destroy']);

    //Questions Routes
    Route::post('/question', [QuestionController::class,'store']);
    Route::put('/question/{id}', [QuestionController::class,'update']);
    Route::delete('/question/{id}', [QuestionController::class,'destroy']);


});

