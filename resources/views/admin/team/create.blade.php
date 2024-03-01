@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.teams.index')}}" model="Team" item="Create"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.teams.store')}}" method="POST" enctype="multipart/form-data">
                     <x-form.row>
                <x-form.input type="text" col="6" label="Name" id="name" name="name" :req="true" value="{{ old('name') }}"/>
<x-form.input type="text" col="6" label="Slug" id="slug" name="slug" :req="true" value="{{ old('slug') }}"/>
</x-form.row> 
    <x-form.row>

<x-form.input type="file" col="6" label="Image" id="image" name="image" alt="image" accept="image/*"  onchange="previewThumb(this,'featured-thumb')" />
<x-form.input type="text" col="6" label="Department" id="department" name="department" :req="true" value="{{ old('department') }}"/>              
</x-form.row>
<x-form.preview id="featured-thumb" />
<x-form.row>
<x-form.input type="text" col="6" label="Whatspapp_no" id="whatspapp_no" name="whatspapp_no" value="{{ old('whatspapp_no') }}"/>
<x-form.input type="text" col="6" label="Facebook_url" id="facebook_url" name="facebook_url" value="{{ old('facebook_url') }}"/>
</x-form.row>
<x-form.input type="text" col="6" label="Instagram_url" id="instagram_url" name="instagram_url" value="{{ old('instagram_url') }}"/>
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="true"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>

            </div>
        </div>
    </div>

@endsection

@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\TeamRequest') !!}
    @include('_helpers.image_preview',['name' => 'image'])
    @include('_helpers.slugify',['title' => 'name'])
@endpush
