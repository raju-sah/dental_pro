<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Http\Requests\Admin\SettingUpdateRequest;


class SettingController extends Controller
{


    public function create()
    {
        return view('admin.setting.socialsetting');
    }

    public function store(SettingRequest $request)
    {
        $setting = Setting::create($request->safe()->except('image'));
        if ($request->hasFile('image')) {
            $setting->storeImage('image', 'setting-images', $request->file('image'));
        }

        return redirect()->back()->with('success', 'Setting Created Successfully!');
    }



    public function edit(Setting $setting)
    {
        return view('admin.setting.socialsetting', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $setting->update($request->safe()->except('image'));
        if ($request->hasFile('image')) {
            $setting->updateImage('image', 'setting-images', $request->file('image'));
        }

        return redirect()->route('admin.settings.socialsetting')->with('success', 'Setting Updated Successfully!');
    }

  
}
