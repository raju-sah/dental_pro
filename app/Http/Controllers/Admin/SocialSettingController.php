<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\SocialSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SocialSettingRequest;
use App\Http\Requests\Admin\SocialSettingUpdateRequest;
use App\Traits\StatusTrait;

class SocialSettingController extends Controller
{
    use StatusTrait;
    

    public function edit(SocialSetting $social_setting) : View
    {
        return view('admin.social_setting.edit', compact('social_setting'));
    }

    public function update(SocialSettingUpdateRequest $request, SocialSetting $social_setting) : RedirectResponse
    {
        $social_setting->update($request->validated());

        return redirect()->route('admin.social-settings.edit', ['social_setting' => $social_setting->id])->with('success', 'SocialSetting Updated Successfully!');
    }

    


}
