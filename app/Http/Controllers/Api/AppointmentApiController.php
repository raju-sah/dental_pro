<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentApiController extends Controller
{
    public function store(AppointmentRequest $request):JsonResponse
    {

        $appointment = Appointment::create($request->validated());
        return response()->json($appointment,201);
    }


}
