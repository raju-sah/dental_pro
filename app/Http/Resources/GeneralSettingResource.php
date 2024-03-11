<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneralSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => asset('uploaded-images/general-setting-images/' . $this->image),
            'description' => $this->description,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'mobile' => $this->mobile,
            'map_url' => $this->map_url,
            'office_open_week' => $this->office_open_week,
            'office_closed_week' => $this->office_closed_week,
           'office_time' => $this->office_time,
            'status' => $this->status==1? 'Active':'Inactive',
            // 'created_at' => $this->created_at->diffForHumans(),
            // 'updated_at' => $this->updated_at->diffForHumans(),
        ];
    }
}
