<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UploadFileTrait;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Programs extends Model
{
    use HasFactory;
    use UploadFileTrait;

    protected $guarded = [];

    public function getImagePathAttribute():string {
return $this->image ? asset('uploaded-images/programs-images/'.$this->image) : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg';
}

public function images(): MorphMany
{
    return $this->morphMany(Image::class, 'imageable');
}
    
}
