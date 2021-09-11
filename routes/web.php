<?php

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
/*
Route::get('/', function () {
    return view('welcome');

});
*/
// Ejemplo importar excel

Route::get('ImportarExportarVista','ControladorParaExcel@ImportarExportarEnVista');
Route::post('importar','ControladorParaExcel@importar')->name('importar');
Route::get('exportar','ControladorParaExcel@exportar')->name('exportar');
