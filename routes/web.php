<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListDetail;


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

Route::get('/list', [ListDetail::class, 'list']);

Route::get('all', ['as' => 'all-launches', 'uses' => 'ListDetail@list'
    //
]);


// Route::get('/list', [ListDetail::class, 'rockets']);
// Route::get('/list', [ListDetail::class, 'launches']);
// Route::get('/list', [ListDetail::class, 'capsules']);

