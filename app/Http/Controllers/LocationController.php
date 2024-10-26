<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function create(Request $request) {
        $location = new Location;
        $location->city = $request->city;
        $location->zipcode = $request->zipcode;
        $location->save();

        return response()->json($location, 200);
    }

    public function show() {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function index($id) {
        if (Location::where('id', $id)->exists()) {
            $location = Location::where('id', $id)->first();
            return response()->json($location, 200);
        } else {
            return response()->json(
                ["message" => "Location not found"],
                404
            );
        }
    }
}
