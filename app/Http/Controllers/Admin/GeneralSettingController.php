<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GeneralSettingRequest;
use App\Http\Requests\Admin\GeneralSettingUpdateRequest;
use App\Traits\StatusTrait;

class GeneralSettingController extends Controller
{
    use StatusTrait;
  

   


    public function edit(GeneralSetting $general_setting) : View
    {
        
    
        return view('admin.general_setting.edit', compact('general_setting'));
    }
    

    public function update(GeneralSettingUpdateRequest $request, GeneralSetting $general_setting) : RedirectResponse
    {
        $general_setting->update($request->safe()->except('image'));
if ($request->hasFile('image')) {
    $general_setting->updateImage('image', 'general_setting-images', $request->file('image'));
}

return redirect()->route('admin.general-settings.edit', ['general_setting' => $general_setting->id])->with('success', 'GeneralSetting Updated Successfully!');
    }

  



}
