<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\SeoSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SeoSettingRequest;
use App\Http\Requests\Admin\SeoSettingUpdateRequest;
use App\Traits\StatusTrait;

class SeoSettingController extends Controller
{
    use StatusTrait;
    

    public function edit(SeoSetting $seo_setting) : View
    {
        return view('admin.seo_setting.edit', compact('seo_setting'));
    }

    public function update(SeoSettingUpdateRequest $request, SeoSetting $seo_setting) : RedirectResponse
    {
        $seo_setting->update($request->validated());

        return redirect()->route('admin.seo-settings.edit',['seo_setting' => $seo_setting->id])->with('success', 'SeoSetting Updated Successfully!');
    }

}
