<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UploadFileTrait;

class Teams extends Model
{
    use HasFactory;
    use UploadFileTrait;

    protected $guarded = [];

    public function getImagePathAttribute():string {
return $this->image ? asset('uploaded-images/teams-images/'.$this->image) : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg';
}


    
}
