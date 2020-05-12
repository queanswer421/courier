<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;

class ShipmentController extends Controller
{
    public function index(Shipment $shipmentModel)
    {
        $shipments = $shipmentModel->get();
        return view('shipments.index', compact('shipments'));
    }
    public function create ()
    {
        return view('shipments.create');
    }
    public function store(Request $request)
    {
        Shipment::create([
            'senderCity' => $request->input('senderCity'),
            'senderStreet' => $request->input('senderStreet'),
            'receiverCity' => $request->input('receiverCity'),
            'receiverStreet' => $request->input('receiverStreet'),
        ]);
    
        return redirect('shipments');
    }
    public function show($id)
    {
        $shipment = Shipment::find($id); 
        //$shipment = $this->cR->getCourier($id);
        // dd($courier);
        return view('shipments.show', compact('shipment'));
    }
    public function search()
    {
        return view('shipments.search');
    }
    public function results(Request $request)
    {
        $pid = $request->pid;
        
        $shipment = Shipment::where('pid', $pid)->first(); 
        // dd($shipment);
        return view('shipments.show', compact('shipment'));
    }
}
