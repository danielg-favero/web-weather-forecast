<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ZipcodeService;

class CityApiController extends Controller
{
    protected $service;

    function __construct(ZipcodeService $service) {
        $this->service = $service;
    }

    public function getByZipcode($zipCode) {
        $data = $this->service->execute($zipCode);
        return response()->json($data, 200);
    }
}
