<?php
 use App\Url;

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

Route::post('/', function() {
	$UrlFound = Url::where('url', request('url'))->first();

	if($UrlFound) {
		return view('resultat')->with('shortened',$UrlFound->shortened);
	} 
});

Route::get('/{shortened}', function ($shortened) {
	
	$UrlShortFound = Url::where('shortened', $shortened)->first();
	
	if(!$UrlShortFound){
		return redirect ('/');
	} else{
		return redirect($UrlShortFound->url);
		
	} 
});


