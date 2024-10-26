<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forecast;
use App\Models\Location;

class ForecastController extends Controller
{
    public function create(Request $request) {
        $forecast = new Forecast;
        $forecast->date = $request->date;
        $forecast->temperature = $request->temperature;
        $forecast->description = $request->description;
        $forecast->wind_speed = $request->wind_speed;
        $forecast->wind_degree = $request->wind_degree;
        $forecast->wind_direction = $request->wind_direction;
        $forecast->humidity = $request->humidity;
        $forecast->cloudcover = $request->cloudcover;
        $forecast->location_id = $request->location_id;

        $forecast->save();

        return response()->json($forecast, 200);
    }

    public function show() {
        $forecasts = Forecast::all();
        return response()->json($forecasts);
    }

    public function index($id) {
        if (Forecast::where('id', $id)->exists()) {
            $forecast = Forecast::where('id', $id)->first();
            return response()->json($forecast, 200);
        } else {
            return response()->json(
                ["message" => "Forecast not found"],
                404
            );
        }
    }
}

