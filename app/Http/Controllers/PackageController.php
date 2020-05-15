<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('packages.index');
    }
    public function send()
    {
        return view('packages.send');
    }
    public function search()
    {
        return view('packages.search');
    }
}
