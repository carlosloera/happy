<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::post('users/registrar','UserHdController@registrar');
Route::post('users/login','UserHdController@login');



Route::post('/data/create', function(Request $req){
	//$data=$req->json()->all();
	//$data=['rent', 'heating', 'utilities', 'internet_tv', 'phone', 'food', 'sweets'];
	//$req->get('name');
	//dd($req);
	//return $req;
	//return  response()->json($req,200);
 	//return response()->json($req->name);
	return response()->json($req);
	//dd($req);
});
