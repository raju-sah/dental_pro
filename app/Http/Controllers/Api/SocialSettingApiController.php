<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SocialSettingResource;
use App\Models\SocialSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SocialSettingApiController extends Controller
{


      /**
 * @OA\Get(
 *     path="/api/social-settings",
 *     summary="Get all social-settings with images",
 *     tags={"Social Settings"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 ref="/SocialSettingResource"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="social Settings retrieved successfully"
 *             ),
 *         ),
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Resource not found",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="General Settings not found"
 *             ),
 *         ),
 *     ),
 * )
 */
    public function index()
    {
        //return SocialSettingResource::collection(SocialSetting::all());
        return new SocialSettingResource(SocialSetting::first());
    }
}
