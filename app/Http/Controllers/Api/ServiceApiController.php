<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceApiController extends Controller
{
    
    public function index(): AnonymousResourceCollection
    {

        

          /**
 * @OA\Get(
 *     path="/api/services",
 *     summary="Get all services with images",
 *     tags={"Services "},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 ref="/ServiceResource"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="Service retrieved successfully"
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
 *                 example="Service not found"
 *             ),
 *         ),
 *     ),
 * )
 */

        return ServiceResource::collection(
            Service::where('status', 1)->where('service_type', 'Dental Service')->with('servicePrices')->get()
        );
            }

            public function show(Service $service)
            {
                // dd('asdasdsa');
                return response()->json($service);
            }
}
