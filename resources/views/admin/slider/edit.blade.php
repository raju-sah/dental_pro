@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.sliders.index')}}" model="Slider" item="Edit"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        <x-form.input type="text" label="Name" id="name" name="name" value="{{$slider->name}}"/>
<x-form.input type="text" label="Url" id="url" name="url" value="{{$slider->url}}"/>
<x-form.textarea label="Description" id="description" name="description" value="{{$slider->description}}" rows="5" cols="5" />
<x-form.input type="file" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
<x-form.preview id="featured-thumb". url="{{$slider->image_path}}"/>
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$slider->status ? 'checked' : ''"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>
            </div>
        </div>
    </div>

@endsection
@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\SliderUpdateRequest') !!}
    @include('_helpers.image_preview',['name' => 'image'])
@endpush