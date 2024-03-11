@extends('layouts.master')

@section('content')
<div class="container-xxl">

    <x-breadcrumb listRoute="{{ route('admin.services.index') }}" model="Service" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                <xform.row>
                    <x-form.input type="file" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
                </xform.row>
                <x-form.preview id="featured-thumb" . url="{{ $service->image_path }}" />
                <x-form.row>
                    <x-form.input type="text" col="6" :req="true" label="Name" id="name" name="name" value="{{ $service->name }}" />
                    <x-form.input type="text" col="6" :req="true" label="Slug" id="slug" name="slug" value="{{ $service->slug }}" />
                </x-form.row>
                <x-form.textarea label="Description" id="description" name="description" value="{!! $service->description !!}" rows="5" cols="5" />


                <label class="form-label mt-3" for="service_type">Service Type</label>
<select name="service_type" id="service_type" class="form-select mb-3">
    <option value="Dental Service" {{ $service->service_type === 'Dental Service' ? 'selected' : '' }}>Dental Service</option>
    <option value="Reason For Choosing Us" {{ $service->service_type === 'Reason For Choosing Us' ? 'selected' : '' }}>Reason For Choosing Us</option>
</select>

                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$service->status ? 'checked' : ''" />
                <div id="inputContainer" class="input-container">
    @foreach ($service->ServicePrices as $key => $value)
        <div class="input-fields">
            <input type="text" name="title[]" class="form-control" value="{{ $value->title }}" placeholder="Enter name">
            <input type="text" name="price[]" class="form-control ms-2 me-2" value="{{ $value->price }}" placeholder="Enter price">
            <span class="rajuspan btn btn-danger mt-2" onclick="removeInputFields(this)"><i class="bx bx-minus">Delete</i></span>
        </div>
    @endforeach
    <span class="rajuspan btn btn-success mt-2" onclick="addInputFields()"><i class="bx bx-plus">Add</i></span>
</div>
        </div>
        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i>
            Save</x-form.button>
        </x-form.wrapper>
    </div>
</div>
</div>
<style>
    .input-container {
        display: flex;
        flex-wrap: wrap;
    }
    .input-fields {
        display: flex;
        flex-wrap: nowrap;
    }
    .input-set {
        margin-right: 10px;
        /* Adjust margin as needed */
        display: flex;
        align-items: center;
    }
    .rajuspan {

        border: 1px solid #ccc;

        border-radius: 5px;
        width: 20%;
        margin-left: 10px;
        margin-right: 10px;
    }

    input[name="title[]"] {
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
    }

    input[name="price[]"] {
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: 20%;
        margin-left: 10px;
    }
</style>
@endsection
@push('custom_js')
<!-- {!! JsValidator::formRequest('App\Http\Requests\Admin\ServiceUpdateRequest') !!} -->
@include('_helpers.image_preview', ['name' => 'image'])
@include('_helpers.multi_inputfield_addon')
@include('_helpers.ck_editor', ['textarea_id' => 'description'])
@include('_helpers.slugify', ['title' => 'name'])
@endpush