<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomePageProgramResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $cleanDescription = str_replace(['&lt;p&gt;', '&lt;/p&gt;'], '', $this->description);

        $cleanDescriptions = strip_tags($cleanDescription); 


        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $cleanDescriptions,
            'page_type' => $this->page_type,
            'display_order'=>$this->display_order,
            'status' => $this->status == 1 ? 'Active' : 'Inactive',
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at->diffForHumans(),
            'images' => ImageResource::collection($this->whenLoaded('images')),
        ]; 
    }
}
