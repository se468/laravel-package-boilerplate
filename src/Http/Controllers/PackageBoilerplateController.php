<?php

namespace se468\PackageBoilerplate\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PackageBoilerplateController extends Controller{

    public function index () {
        /* Comment this out before publishing */
        Artisan::call('vendor:publish', [
            '--tag' => 'public', 
            '--force' => 1
        ]);
        return view("PackageBoilerplate::index");
    }
}