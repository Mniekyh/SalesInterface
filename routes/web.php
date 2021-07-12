<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// // Default page of Laravel
// Route::get('/', function () {
//     return view('welcome');
// });

// //MyPage - string
// Route::get('/home', function ()
//  {

//    return view ("home"); 

// });

//Laravel 8 -- New Way
Route::get('/products', [ProductsController::class,'index']);



//##################### EXAMPLES #######################################

// //MyPage - array (JSON)

// Route::get('/users', function()
// {

//     return ['PHP', 'HRTML', 'Css '];

// });


// //MyPage - JSON object

// Route::get('/users', function ()
//  {
//     return response()->json(
//         ['name' => 'Jakub',
//         'spec' => "Mechanic",
//         'example' => "Stupid"
//     ]
//     );


// });

// //MyPage - Function

// Route::get('/users', function () {
    

//     return redirect('/');

// });
