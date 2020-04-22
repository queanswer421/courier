<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courier\Repositories\CourierRepository;
use App\Courier;

class CourierController extends Controller
{
    public function __construct(CourierRepository $repository){
        $this->cR = $repository;
    }
    public function index(){
        $couriers = $this->cR->getCouriersForClient();
        return view('couriers.index', compact('couriers'));
    }
    public function create(){
        return view('couriers.create');
    }
    public function show($id){
        $courier = $this->cR->getCourier($id);
        // dd($courier);
        return view('couriers.show', compact('courier'));
        // $courier= Courier::first();
        // return view('couriers.show', compact('courier'));
    }
    public function store(Request $request)
    {
        $courier = $this->cR->createCourier($request);
        return redirect()->route('couriers.index');
        // $courier= Courier::first();
        // return view('couriers.show', compact('courier'));
    }
    public function search(){
        return view('couriers.search');
    }


}
