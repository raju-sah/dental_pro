<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Team;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Http\Requests\Admin\TeamUpdateRequest;
use App\Traits\StatusTrait;

class TeamController extends Controller
{
    use StatusTrait;
    public function index() : View
    {
        return view('admin.team.index', [
            'teams' => Team::query()->select(['id', 'name','slug','department','image','whatspapp_no','facebook_url','instagram_url','status'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.team.create');
    }

    public function store(TeamRequest $request) : RedirectResponse
    {
        $team = Team::create($request->safe()->except('image'));
if ($request->hasFile('image')) {
    $team->storeImage('image', 'team-images', $request->file('image'));
}

        return redirect()->route('admin.teams.index')->with('success', 'Team Created Successfully!');
    }

    public function show(Team $team) : View
    {
        return view('admin.team.show', compact('team'));
    }

    public function edit(Team $team) : View
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(TeamUpdateRequest $request, Team $team) : RedirectResponse
    {
        $team->update($request->safe()->except('image'));
if ($request->hasFile('image')) {
    $team->updateImage('image', 'team-images', $request->file('image'));
}

        return redirect()->route('admin.teams.index')->with('success', 'Team Updated Successfully!');
    }

    public function destroy(Team $team) : RedirectResponse
    {
        if($team->image){
$team->deleteImage('image', 'team-images');
}

        $team->delete();

        return redirect()->route('admin.teams.index')->with('error', 'Team Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('Team',$request->id,$request->status);
}

}
