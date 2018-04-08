<?php

namespace App\Http\Controllers;

use App\Parkingslot;
use Illuminate\Http\Request;

class ParkingSlotController extends Controller
{
    public function createSlots()	{
    	for ($i=1; $i < 5; $i++) { 
	    	$parkingslot = new Parkingslot;
	    	$parkingslot->save();
    	}
    }

    public function getLatest() {
    	$values = Parkingslot::orderBy('id')->get();

    	return response()->json($values);
    }

    public function setLatest($val1, $val2, $val3, $val4) {
		$parkingslot = Parkingslot::find(1);
		$parkingslot->status = $val1;
		$parkingslot->save();
		$parkingslot = Parkingslot::find(2);
		$parkingslot->status = $val2;
		$parkingslot->save();
		$parkingslot = Parkingslot::find(3);
		$parkingslot->status = $val3;
		$parkingslot->save();
		$parkingslot = Parkingslot::find(4);
		$parkingslot->status = $val4;
		$parkingslot->save();

		return "Stored";
    }
}
