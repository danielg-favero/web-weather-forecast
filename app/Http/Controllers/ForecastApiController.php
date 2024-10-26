<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ForecastApiService;

class ForecastApiController extends Controller
{
    protected $apiService;

    function __construct(ForecastApiService $apiService) {
        $this->apiService = $apiService;
    }

    public function show(Request $request) {
        $query = $request->query('query');

        $data = $this->apiService->execute($query);

        return response()->json($data, 200);
    }
}

