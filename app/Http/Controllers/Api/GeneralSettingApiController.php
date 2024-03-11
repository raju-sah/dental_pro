<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GeneralSettingResource;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;



 class GeneralSettingApiController extends Controller
{

  /**
 * @OA\Get(
 *     path="/api/general-settings",
 *     summary="Get all general-settings with images",
 *     tags={"General Settings"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 ref="/GeneralSettingResource"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="General Settings retrieved successfully"
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
        return new GeneralSettingResource(GeneralSetting::where('status', 1)->first());
    }

}
