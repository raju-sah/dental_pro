<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Http\Requests\Admin\SliderUpdateRequest;
use App\Traits\StatusTrait;

class SliderController extends Controller
{
    use StatusTrait;
    public function index() : View
    {
        return view('admin.slider.index', [
            'sliders' => Slider::query()->select(['id', 'name','url','image','status'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.slider.create');
    }

    public function store(SliderRequest $request) : RedirectResponse
    {
        $slider = Slider::create($request->safe()->except('image'));
if ($request->hasFile('image')) {
    $slider->storeImage('image', 'slider-images', $request->file('image'));
}

        return redirect()->route('admin.sliders.index')->with('success', 'Slider Created Successfully!');
    }

    public function show(Slider $slider) : View
    {
        return view('admin.slider.show', compact('slider'));
    }

    public function edit(Slider $slider) : View
    {
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(SliderUpdateRequest $request, Slider $slider) : RedirectResponse
    {
        $slider->update($request->safe()->except('image'));
if ($request->hasFile('image')) {
    $slider->updateImage('image', 'slider-images', $request->file('image'));
}

        return redirect()->route('admin.sliders.index')->with('success', 'Slider Updated Successfully!');
    }

    public function destroy(Slider $slider) : RedirectResponse
    {
        if($slider->image){
$slider->deleteImage('image', 'slider-images');
}

        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('error', 'Slider Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('Slider',$request->id,$request->status);
}

}
