<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TestimonialApiController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return TestimonialResource::collection(Testimonial::where('status', 1)->get());
    }
}
