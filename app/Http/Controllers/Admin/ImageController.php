<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function destroy(Request $request): bool
    {
        Image::where('id', $request->gallery_id)->delete();
        return @unlink('uploaded-images/' . $request->folder . '/' . $request->image_name);
    }
}