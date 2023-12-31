<?php

use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;

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

Route::get("excel" , [ExcelController::class , 'index']);
Route::post("import-excel" , [ExcelController::class , 'import'])->name('import-excel');
Route::post("export-excel" , [ExcelController::class , 'export'])->name('export-excel');
