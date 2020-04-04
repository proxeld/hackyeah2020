<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Client\ClientVouchersController@index')->name('client_vouchers.index');
Route::post('/', 'Client\ClientVouchersController@store')->name('client_vouchers.store');
Route::get('/{voucher_id}', 'Client\ClientVouchersController@show')->name('client_vouchers.show');
Route::delete('/{voucher_id}', 'Client\ClientVouchersController@delete')->name('client_vouchers.delete');