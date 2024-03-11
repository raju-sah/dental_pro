@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.programs.index')}}" model="Programs" item="Create"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.programs.store')}}" method="POST" enctype="multipart/form-data">
               <x-form.row>
               <x-form.input type="file" label="Gallery Images" :req="true" id="images" name="images[]" accept="image/*" multiple onchange="appendImages(this,'images-list')"/>
                    <div class="images-list row" id="images-list" style="display: none;"></div>
               </x-form.row>
               <x-form.preview id="featured-thumb" . />
               <x-form.row>
            <x-form.input type="text" col="6" :req="true" label="Title" id="title" name="title" value="{{ old('title') }}" />
                <x-form.input type="text" col="6" :req="true" label="Slug" id="slug" name="slug" value="{{ old('slug') }}" />
                </x-form.row>
              
        <label class="form-label mt-3" for="service_type">Page Type</label>
<select name="service_type" id="service_type" class="form-select mb-3">
    <option value="Home Page">Home Page</option>
    <option value="Single Page">Single Page</option>
</select>
                <x-form.textarea label="Description" id="description" name="description" value="{{ old('description') }}" rows="5" cols="5" />
               
                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="true" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>

        </div>
    </div>
</div>

@endsection

@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\ProgramsRequest') !!}
@include('_helpers.image_preview',['name' => 'image'])
@include('_helpers.multi_image', ['name' => 'image'])
@include('_helpers.ck_editor', ['textarea_id' => 'description'])
@include('_helpers.slugify', ['title' => 'title'])
@endpush