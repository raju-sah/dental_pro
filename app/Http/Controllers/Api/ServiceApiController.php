<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceApiController extends Controller
{
    
    public function index(): AnonymousResourceCollection
    {

        return ServiceResource::collection(
            Service::where('status', 1)->where('service_type', 'Dental Service')->with('servicePrices')->get()
        );
            }
}
