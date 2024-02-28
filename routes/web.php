<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Kreait\Laravel\Firebase\Facades\Firebase;
use App\Models\Values;
use App\Models\Devices;
use App\Http\Controllers\ValuesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('halaman.home');
// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::get('/monitoringpa', function () {
    return view('halaman.monitoringpa');
});

Route::get('/manajemen', function () {
    return view('halaman.manajemen');
});

Route::get('/monitoringpd', function () {
    return view('halaman.monitoringpd');
});

Route::get('/value/{dB_max}', function(float $dB_max){
    return 'value'.$dB_max;
});