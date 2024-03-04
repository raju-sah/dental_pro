@extends('layouts.master')

@section('content')
    <div class="container-xxl">

        {{-- <x-breadcrumb listRoute="{{ route('admin.services.index') }}" model="Service" item="Edit"></x-breadcrumb> --}}

        <div class="card">
            <div class="card-body">

                {{-- @if (isset($setting->id))/ --}}
                    {{-- <x-form.wrapper action="{{ route('admin..update', $setting->id) }}" method="POST"
                        enctype="multipart/form-data"> --}}
                        <x-form.wrapper action="{{route('admin.settings.index')}}" method="POST" enctype="multipart/form-data">
                {{-- @method('PATCH') --}}
                <xform.row>
                    <x-form.input type="file" label="Image" id="image" name="image" alt="image"
                        accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
                </xform.row>
                <x-form.preview id="featured-thumb" />
                <x-form.row>
                    <x-form.input type="text" col="6" :req="true" label="Name" id="name"
                        name="name" value="{{ $service->name ?? ''}}" />


                  
                </x-form.row>
                <x-form.textarea label="Description" id="description" name="description" value="{{ $service->description ?? '' }}"
                    rows="5" cols="5" />


                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i>
                    Save</x-form.button>
                </x-form.wrapper>
            </div>
        </div>
    </div>
@endsection
@push('custom_js')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\Admin\ServiceUpdateRequest') !!} --}}
    @include('_helpers.image_preview', ['name' => 'image'])

    @include('_helpers.ck_editor', ['textarea_id' => 'description'])
    @include('_helpers.slugify', ['title' => 'name'])
@endpush
settings