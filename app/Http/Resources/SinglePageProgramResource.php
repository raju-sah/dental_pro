<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SinglePageProgramResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $cleanDescription = str_replace(['&lt;p&gt;', '&lt;/p&gt;'], '', $this->description);

        $cleanDescriptions = strip_tags($cleanDescription); // Keep <strong> tag

        $firstImage = $this->images->first();

    
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $cleanDescriptions,
            'page_type' => $this->page_type,
            'status' => $this->status == 1 ? 'Active' : 'Inactive',
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at->diffForHumans(),
            'banner_image' => asset('uploaded-images/programs-images/' . $firstImage->image_name),
            'images' => $this->getImagesWithoutBanner(),
        ];
    }

    protected function getImagesWithoutBanner()
    {
      
        $images = $this->images->slice(1)->all();

      
        return ImageResource::collection(collect($images));
    }
}

    

