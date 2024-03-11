<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *   version="1.0.0",
 *   title="My API",
 *   @OA\License(name="MIT"),
 *   @OA\Attachable()
 * )
 */
class GalleryApiController extends Controller
{
  /**
 * @OA\Get(
 *     path="/api/galleries",
 *     summary="Get all galleries with images",
 *     tags={"Galleries"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 ref="/GalleryResource"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="Gallery retrieved successfully"
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
 *                 example="Gallery not found"
 *             ),
 *         ),
 *     ),
 * )
 */
public function index()
{
    return new GalleryResource(Gallery::with('images')->first());
}


}
