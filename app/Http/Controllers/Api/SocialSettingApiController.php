<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SocialSettingResource;
use App\Models\SocialSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SocialSettingApiController extends Controller
{
    public function index()
    {
        //return SocialSettingResource::collection(SocialSetting::all());
        return new SocialSettingResource(SocialSetting::first());
    }
}
