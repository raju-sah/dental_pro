<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Requests\Admin\GalleryUpdateRequest;
use App\Models\Image;
use Illuminate\Http\JsonResponse;

class GalleryController extends Controller
{
    
    public function index() : View
    {
        return view('admin.gallery.index', [
            'galleries' => Gallery::query()->select(['id', 'image'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.gallery.create');
    }

    public function store(GalleryRequest $request) : RedirectResponse
    {
        $gallery = Gallery::create($request->safe()->except('image'));
        if($request->has('images')){
            foreach ($request->images as $image) {
                $gallery->storeMultiImage($image, 'gallery-images');
            }
        }
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery Created Successfully!');
    }

    public function show(Gallery $gallery) : View
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery) : View
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(GalleryUpdateRequest $request, Gallery $gallery) : RedirectResponse
    {
        $gallery->update($request->safe()->except('image'));
        if($request->has('images')){
            foreach ($request->images as $image) {
                $gallery->storeMultiImage($image, 'gallery-images');
            }
        }
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery Updated Successfully!');
    }

    public function destroy(Gallery $gallery) : RedirectResponse
    {
        if($gallery->image){
$gallery->deleteImage('image', 'gallery-images');
}

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('error', 'Gallery Deleted Successfully!');
    }


    
    
    
}
