<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueMgtController;
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

// Route::get('/league/results', function () {
//     $week1 = '{"name": "Man U","pts": 10,"p": 10,"w": 10,"d": 10,"l": 10,"gd": 10}';
//     $tableJson1 = json_decode($week1);
//     $table1 = array($tableJson1, $tableJson1, $tableJson1, $tableJson1);

//     $result = '{"home": "Arsenal", "away": "Man U"}';
//     $resultJson1 = json_decode($result);
//     $result1 = array($resultJson1, $resultJson1);

//     return view('prediction', ['matches' => $table1, 'results' => $result1]);
// });


Route::get('/playAll', function () {
    $week1 = '{"name": "Arsenal","pts": 10,"p": 10,"w": 10,"d": 10,"l": 10,"gd": 10}';
    $week2 = '{"name": "Man U","pts": 10,"p": 10,"w": 10,"d": 10,"l": 10,"gd": 10}';
    $tableJson1 = json_decode($week1);
    $tableJson2 = json_decode($week2);
    $table1 = array($tableJson1, $tableJson1, $tableJson1, $tableJson1);
    $table2 = array($tableJson1, $tableJson1, $tableJson1, $tableJson1);

    $result = '{"home": "Arsenal", "away": "Man U"}';
    $resultJson1 = json_decode($result);
    $result1 = array($resultJson1, $resultJson1);
    
    $total = array(
        array(
            "matches" => $table1,
            "results" => $result1
        ),
        array(
            "matches" => $table2,
            "results" => $result1
        ),
        array(
            "matches" => $table1,
            "results" => $result1
        )
    );
    return view('pages.weeks_prediction_table', ['weeks' => $total]);
});


Route::post('/league/results', [LeagueMgtController::class, 'index'])->name('index');
