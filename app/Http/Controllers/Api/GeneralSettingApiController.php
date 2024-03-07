<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GeneralSettingResource;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GeneralSettingApiController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return GeneralSettingResource::collection(GeneralSetting::where('status', 1)->get());
    }

}
