<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageProgramResource;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HomePageProgramApiController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return HomePageProgramResource::collection(
            Programs::where('status', 1)
                ->where('page_type', 'Home_Page')
                ->orderBy('display_order', 'asc') // Use orderBy for ascending order
                ->with('images')
                ->get()
        );
            }  
}
