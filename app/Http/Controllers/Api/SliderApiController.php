<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SliderApiController extends Controller
{
    public function index(): AnonymousResourceCollection
   {
      return SliderResource::collection(Slider::where('status', 1)->get());
   }
}
