<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

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
    public function history(Request $request)
    {
        $pid = $request->pid;
        // dd($request);
        $history = History::where('pid', $pid)->first(); 
        // dd($history);
        return view('packages.history', compact('history'));
    }
}
