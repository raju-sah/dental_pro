<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GalleryApiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return GalleryResource::collection(Gallery::with('images')->get());
    }
}
