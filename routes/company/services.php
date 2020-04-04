<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Company\CompanyServicesController@index')->name('company_services.index');
Route::get('/{id}', 'Company\CompanyServicesController@show')->name('company_services.show');
Route::post('/', 'Company\CompanyServicesController@store')->name('company_services.store');
Route::match(['put', 'patch'], '/{id}', 'Company\CompanyServicesController@update')->name('company_services.update');
Route::delete('/{id}', 'Company\CompanyServicesController@delete')->name('company_services.delete');