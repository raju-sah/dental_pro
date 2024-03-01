@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.services.index')}}" model="Service" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
<xform.row>
                <x-form.input type="file" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
                </xform.row>
                 <x-form.preview id="featured-thumb" . url="{{$service->image_path}}" />
                <x-form.row>
                    <x-form.input type="text" col="6" :req="true" label="Name" id="name" name="name" value="{{$service->name}}" />
                    <x-form.input type="text" col="6" :req="true" label="Slug" id="slug" name="slug" value="{{$service->slug}}" />
                </x-form.row>
                <x-form.textarea label="Description" id="description" name="description" value="{{$service->description}}" rows="5" cols="5" />

                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$service->status ? 'checked' : ''" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>

@endsection
@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\ServiceUpdateRequest') !!}
    @include('_helpers.image_preview',['name' => 'image'])
@endpush