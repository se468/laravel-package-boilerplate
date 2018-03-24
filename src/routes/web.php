<?php 


$namespace = "se468\PackageBoilerplate\Http\Controllers";

Route::group(['namespace' => $namespace, 'prefix' => 'package-boilerplate'], function () {
    Route::get('/', 'PackageBoilerplateController@index');
});