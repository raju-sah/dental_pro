<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactApiController extends Controller
{
    public function store(ContactRequest $request):JsonResponse
    {
        $contact = Contact::create($request->validated());
        return response()->json($contact,201);
    }
}
