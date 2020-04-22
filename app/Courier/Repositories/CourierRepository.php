<?php
namespace App\Courier\Repositories;
use App\Courier;
use Illuminate\Http\Request;

class CourierRepository {
    public function getCouriersForClient(){
        return Courier::all();
    }
    public function getCourier($id){
        return Courier::findOrFail($id);
    }
    public function createCourier(Request $request){
        $courier = new Courier;
        $courier->trackNo = $request->trackNo;
        $courier->description = $request->description;
        $courier->parcelWeight = 1; 	
        $courier->parcelDimensionLen = 1; 	
        $courier->parcelDimensionWidth = 1; 	
        $courier->parcelDimensionHeight = 1;
        $courier->save();
        return $courier;
    }
}