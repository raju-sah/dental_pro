<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Programs;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramsRequest;
use App\Http\Requests\Admin\ProgramsUpdateRequest;
use App\Traits\StatusTrait;

class ProgramsController extends Controller
{
    use StatusTrait;
    public function index() : View
    {
        return view('admin.programs.index', [
            'programs' => Programs::query()->select(['id', 'title','image','status'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.programs.create');
    }

    public function store(ProgramsRequest $request) : RedirectResponse
    {
       
        $data = $request->safe()->except('image','display_order');
      
        

        if($request->page_type != "Home_Page"){
            $data['display_order'] = $request->slug;                    
        }else{
            $data['display_order'] = $request->display_order;
        }

        $program = Programs::create($data);
        if($request->has('images')){
            foreach ($request->images as $image) {
                $program->storeMultiImage($image, 'programs-images');
            }
        }
        return redirect()->route('admin.programs.index')->with('success', 'Programs Created Successfully!');
    }

    public function show(Programs $program) : View
    {
        return view('admin.programs.show', compact('program'));
    }

    public function edit(Programs $program) : View
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function update(ProgramsUpdateRequest $request, Programs $program) : RedirectResponse
    {
        $data = $request->safe()->except('image','display_order');
      
    
        if($request->page_type != "Home_Page"){
            $data['display_order'] = $request->slug;                    
        }else{
            $data['display_order'] = $request->display_order;
        }


        $program->update( $data);

       
        if($request->has('images')){
            foreach ($request->images as $image) {
                $program->storeMultiImage($image, 'programs-images');
            }
        }

        return redirect()->route('admin.programs.index')->with('success', 'Programs Updated Successfully!');
    }

    public function destroy(Programs $program) : RedirectResponse
    {
        if($program->image){
$program->deleteImage('image', 'programs-images');
}

        $program->delete();

        return redirect()->route('admin.programs.index')->with('error', 'Programs Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('Programs',$request->id,$request->status);
}

}
