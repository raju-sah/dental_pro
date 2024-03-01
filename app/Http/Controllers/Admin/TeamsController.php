<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Teams;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamsRequest;
use App\Traits\StatusTrait;
use App\Traits\UploadFileTrait;

class TeamsController extends Controller
{
    use UploadFileTrait;
    use StatusTrait;
    public function index() : View
    {
        return view('admin.teams.index', [
            'teams' => Teams::query()->select(['id', 'name','slug','department','image','whatspapp_no','facebook_url','instagram_url','status'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.teams.create');
    }

    public function store(TeamsRequest $request) : RedirectResponse
    {
        $teams = Teams::create($request->safe()->except('image'));
if ($request->hasFile('image')) {
    $teams->storeImage('image', 'teams-images', $request->file('image'));
}

        return redirect()->route('admin.teams.index')->with('success', 'Teams Created Successfully!');
    }

    public function show(Teams $teams) : View
    {
        return view('admin.teams.show', compact('teams'));
    }

    public function edit(Teams $teams) : View
    {
        return view('admin.teams.edit', compact('teams'));
    }

    public function update(TeamsRequest $request, Teams $teams) : RedirectResponse
    {
        $data = $request->safe()->except('image');
if ($request->input('image_removed') == 'true') {
$teams->deleteImage('image', 'teams-images');
$data['image'] = null;
}

$teams->update($data);

if ($request->hasFile('image')) {
    $teams->updateImage('image', 'teams-images', $request->file('image'));
}

        return redirect()->route('admin.teams.index')->with('success', 'Teams Updated Successfully!');
    }

    public function destroy(Teams $teams) : RedirectResponse
    {
        if($teams->image){
$teams->deleteImage('image', 'teams-images');
}

        $teams->delete();

        return redirect()->route('admin.teams.index')->with('error', 'Teams Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('Teams',$request->id,$request->status);
}

}
