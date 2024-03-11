<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageProgramResource;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HomePageProgramApiController extends Controller
{



     /**
 * @OA\Get(
 *     path="/api/home-page-programs",
 *     summary="Get all home-page-programs with images",
 *     tags={"Home Page Program Api"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 ref="/HomePageProgramResource"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="Home Page Program Api retrieved successfully"
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
    public function index():AnonymousResourceCollection
    {
        return HomePageProgramResource::collection(
            Programs::where('status', 1)
                ->where('page_type', 'Home_Page')
                ->orderBy('display_order', 'asc') // Use orderBy for ascending order
                ->with('images')
                ->get()
        );
            }  
}
