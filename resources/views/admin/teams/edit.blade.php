@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.teams.index')}}" model="Teams" item="Edit"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.teams.update', $teams->id)}}" method= "POST" enctype="multipart/form-data">
                        @method('PATCH')
                        <x-form.input type="text" label="Name" id="name" name="name" value="{{$teams->name}}"/>
<x-form.input type="text" label="Slug" id="slug" name="slug" value="{{$teams->slug}}"/>
<x-form.input type="text" label="Department" id="department" name="department" value="{{$teams->department}}"/>
<x-form.input type="file" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
<x-form.preview id="featured-thumb". url="{{$teams->image_path}}"/>
<x-form.input type="text" label="Whatspapp_no" id="whatspapp_no" name="whatspapp_no" value="{{$teams->whatspapp_no}}"/>
<x-form.input type="text" label="Facebook_url" id="facebook_url" name="facebook_url" value="{{$teams->facebook_url}}"/>
<x-form.input type="text" label="Instagram_url" id="instagram_url" name="instagram_url" value="{{$teams->instagram_url}}"/>
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$teams->status ? 'checked' : ''"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>
            </div>
        </div>
    </div>

@endsection
@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\TeamsRequest') !!}
    @include('_helpers.image_preview',['name' => 'image'])
@endpush
