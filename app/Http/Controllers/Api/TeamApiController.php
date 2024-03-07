<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TeamApiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        
        return TeamResource::collection(Team::where('status', 1)->get());
        
    }
}
