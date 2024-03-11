<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $dynamicPath = $this->imageable_type;
        $imagePath = '';
    
        if ($dynamicPath == 'App\Models\Slider') {
            $imagePath = 'slider-gallery-images';
        } elseif ($dynamicPath == 'App\Models\Gallery') {
            $imagePath = 'gallery-images';
        } elseif ($dynamicPath == 'App\Models\Programs') {
            $imagePath = 'programs-images';
        }
    
        return [
            'image' => asset("uploaded-images/{$imagePath}/" . $this->image_name),
        ];
    }
    
}
