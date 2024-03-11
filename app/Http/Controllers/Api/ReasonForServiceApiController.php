<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ReasonForServiceApiController extends Controller
{



          /**
 * @OA\Get(
 *     path="/api/reason-to-choose",
 *     summary="Get all services with images",
 *     tags={"Reason For Choosing  Services "},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 ref="/ReasonForServiceResource"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="ReasonForService retrieved successfully"
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
 *                 example="ReasonForService not found"
 *             ),
 *         ),
 *     ),
 * )
 */
    public function index(): AnonymousResourceCollection
    {

        return ServiceResource::collection(
            Service::where('status', 1)->where('service_type', 'Reason For Choosing Us')->with('servicePrices')->get()
        );
            }
}
