<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProgramResource;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SinglePageProgramApiController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return ProgramResource::collection(Programs::where('status', 1)->where('page_type', 1)->get());
    }
}
