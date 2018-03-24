<?php

namespace se468\PackageBoilerplate\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageBoilerplateController extends Controller{

    public function index () {

        return view("PackageBoilerplate::index");
    }
}