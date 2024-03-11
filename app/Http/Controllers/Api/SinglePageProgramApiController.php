<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SinglePageProgramResource;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SinglePageProgramApiController extends Controller
{
    public function index() {
        return new  SinglePageProgramResource(Programs::where('status', 1)->where('page_type', 'Single_Page')->with('images')->first());
        
    }
}
