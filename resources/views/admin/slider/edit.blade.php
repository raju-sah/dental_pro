@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.sliders.index')}}" model="Slider" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')

                <x-form.row>
                    <x-form.input type="text" col="6" :req="true" label="Name" id="name" name="name" value="{{$slider->name}}" />
                    <x-form.input type="text" col="6" :req="true" label="Slug" id="slug" name="slug" value="{{$slider->slug}}" />
                </x-form.row>
                  
                   <x-form.row>
{{-- 
                    <x-form.input type="file" col="6" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
                    <x-form.input type="text"   col="6" label="Url" id="url" name="url" value="{{$slider->url}}" /> --}}

                        <x-form.input type="file" label="Gallery Images" :req="true" id="images" name="images[]" accept="image/*" multiple onchange="appendImages(this,'images-list')"/>

                        <div class="images-list row" id="images-list" style="display: flex;">
                            @foreach($slider->images as $image)
                                <div class="col-xl-2 col-lg-4 col-md-3 col-sm-4 col-6 mt-4 dynamic-img position-relative" id="gallery{{$image->id}}">
                                    @if($loop->count > 1)
                                        <button type="button" data-index="{{$image->id}}" data-image="{{$image->image_name}}" data-id="{{$image->id}}" class="btn-close inline-close deleteGalleryImage"></button>
                                    @endif
                                    <div class="img-container ratio-4by3">
                                        <img src="{{asset('uploaded-images/slider-gallery-images/'.$image->image_name)}}" alt="{{$image->id}}" class="card-img">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="images-list row" id="images-list" style="display: none;"></div>

                   </x-form.row>
                    <x-form.preview id="featured-thumb" . url="{{$slider->image_path}}" />
                    <x-form.textarea label="Description" id="description" name="description" value="{{$slider->description}}" rows="5" cols="5" />
                    <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$slider->status ? 'checked' : ''" />

                    <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>

@endsection
@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\SliderUpdateRequest') !!}
@include('_helpers.multi_image', ['name' => 'image'])
@include('_helpers.ck_editor', ['textarea_id' => 'description'])
@include('_helpers.slugify',['title' => 'name'])
@include('_helpers.multi_img_delete',['folder' => 'slider-gallery-images'])
@endpush