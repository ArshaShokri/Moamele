<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/{user}', function ($user) {
    $data = DB::select('SELECT * FROM users WHERE username = ?', [$user]);
    foreach($data as $d) {
        $f = $d->firstn;
        $l = $d->lastn;
        $j = $d->job;
    }
    return view('index', [
        'user' => $user,
        'firstn' => $f,
        'lastn' => $l,
        'job' => $j
    ]);
});
