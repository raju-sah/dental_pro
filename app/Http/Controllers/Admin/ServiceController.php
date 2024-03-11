<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Http\Requests\Admin\ServiceUpdateRequest;
use App\Models\ServicePrice;
use App\Traits\StatusTrait;

class ServiceController extends Controller
{
    use StatusTrait;
    public function index(): View
    {
        return view('admin.service.index', [
            'services' => Service::query()->select(['id', 'name', 'slug', 'description', 'image', 'status'])->latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.service.create');
    }

    public function store(ServiceRequest $request): RedirectResponse
    {
    
        $service = Service::create($request->safe()->except('title', 'price', 'image'));
        if ($request->hasFile('image')) {
            $service->storeImage('image', 'service-images', $request->file('image'));
        }
    
        $data = $request->validated();
    
        if (isset($data['title']) && is_array($data['title'])) {
            $variations = [];
    
            foreach ($data['title'] as $index => $title) {
                // If is_default is 1, set status to 1
                $variations[] = [
                    'title' => ucfirst($title),
                    'price' => ucfirst($data['price'][$index]),
                    'service_id' => $service->id,
                ];
            }
    
            ServicePrice::insert($variations);
        }
    
        return redirect()->route('admin.services.index')->with('success', 'Service Created Successfully!');
    }
    
    public function show(Service $service): View
    {
        return view('admin.service.show', compact('service'));
    }

    public function edit(Service $service): View
    {
        return view('admin.service.edit', compact('service'));
    }

    public function update(ServiceUpdateRequest $request, Service $service): RedirectResponse
    {
        $service->update($request->safe()->except('title','price','image'));

        if ($request->hasFile('image')) {
            $service->updateImage('image', 'service-images', $request->file('image'));
        }


        $data = $request->validated();
        $variations = [];  

        if (isset($data['title']) && is_array($data['title'])) {
        foreach ($data['title'] as $index => $title) {
           
                        // If is_default is 1, set status to 1
                            $variations[] = [
                                'title' => ucfirst($title),
                                'price' => ucfirst($data['price'][$index]),
                                'service_id' => $service->id,
               
               
            ];
        }
 $service->servicePrices()->delete();
        ServicePrice::insert($variations);
    }
        return redirect()->route('admin.services.index')->with('success', 'Service Updated Successfully!');
    }

    public function destroy(Service $service): RedirectResponse
    {
        if ($service->image) {
            $service->deleteImage('image', 'service-images');
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('error', 'Service Deleted Successfully!');
    }

    public function changeStatus(Request $request): void
    {
        $this->changeItemStatus('Service', $request->id, $request->status);
    }


    
}
