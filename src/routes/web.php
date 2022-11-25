<?php 

use Rivan\Barang\Http\Controllers\BarangController;



Route::group(['namespace' => 'Rivan\Barang\Http\Controllers','middleware' => 'web'], function () {
    
    Route::get('/barang/{id}', [BarangController::class , 'show']);

    Route::post('/barang/{id}', [BarangController::class , 'update']);

});


?>