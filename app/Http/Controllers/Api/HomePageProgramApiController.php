<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProgramResource;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HomePageProgramApiController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return ProgramResource::collection(Programs::where('status', 1)->where('page_type', 0)->get());
    }
}
