@extends('layouts.master')

@section('content')
<div class="container-xxl">

    <x-breadcrumb listRoute="{{ route('admin.testimonials.index') }}" model="Testimonial" item="Create"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                <x-form.row>
                    <x-form.input type="file" col="6" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
                    <x-form.input type="text" col="6" :req="true" label="Name" id="name" name="name" value="{{ old('name') }}" />
                </x-form.row>
                <x-form.preview id="featured-thumb" . />

                <x-form.input type="text" col="6" :req="true" label="Slug" id="slug" name="slug" value="{{ old('slug') }}" />

                <x-form.textarea label="Description" col="12" id="description" name="description" value="{{ old('description') }}" rows="5" cols="5" />
                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="true" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i>
                    Save</x-form.button>
            </x-form.wrapper>

        </div>
    </div>
</div>
@endsection

@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\TestimonialRequest') !!}
@include('_helpers.image_preview', ['name' => 'image'])
@include('_helpers.ck_editor', ['textarea_id' => 'description'])
@include('_helpers.slugify', ['title' => 'name'])


@endpush