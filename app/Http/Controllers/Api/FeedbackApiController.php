<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FeedbackApiController extends Controller
{
    public function store(FeedbackRequest $request):JsonResponse
    {
        $feedback = Feedback::create($request->safe()->except('image'));
        if ($request->hasFile('image')) {
            $feedback->updateImage('image', 'feedback-images', $request->file('image'));
        }
        return response()->json($feedback,201);
    }
}
