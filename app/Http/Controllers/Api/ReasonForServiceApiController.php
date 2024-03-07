<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ReasonForServiceApiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {

        return ServiceResource::collection(
            Service::where('status', 1)->where('service_type', 'Reason For Choosing Us')->with('servicePrices')->get()
        );
            }
}
