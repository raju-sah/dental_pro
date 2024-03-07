@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.galleries.index')}}" model="Gallery" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.galleries.update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                <x-form.row>
                    <x-form.input type="file" label="Gallery Images" :req="true" id="images" name="images[]" accept="image/*" multiple onchange="appendImages(this,'images-list')" />

                    <div class="images-list row" id="images-list" style="display: flex;">
                        @foreach($gallery->images as $image)
                        <div class="col-xl-2 col-lg-4 col-md-3 col-sm-4 col-6 mt-4 dynamic-img position-relative" id="gallery{{$image->id}}">
                            @if($loop->count > 1)
                            <button type="button" data-index="{{$image->id}}" data-image="{{$image->image_name}}" data-id="{{$image->id}}" class="btn-close inline-close deleteGalleryImage"></button>
                            @endif
                            <div class="img-container ratio-4by3">
                                <img src="{{asset('uploaded-images/gallery-images/'.$image->image_name)}}" alt="{{$image->id}}" class="card-img">
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="images-list row" id="images-list" style="display: none;"></div>

                </x-form.row>
                <x-form.preview id="featured-thumb" . url="{{$gallery->image_path}}" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>



@endsection
@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\GalleryUpdateRequest') !!}
@include('_helpers.image_preview',['name' => 'image'])
@include('_helpers.multi_image', ['name' => 'image'])
@include('_helpers.multi_img_delete', ['folder' => 'gallery-images'])
@endpush