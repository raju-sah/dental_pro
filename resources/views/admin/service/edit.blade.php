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


                <x-form.enum-select label="Service Type" col="4" :req="true" :model="$service->service_type" :options="\App\Enums\ServiceType::cases()" name="service_type"></x-form.enum-select>




                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$service->status ? 'checked' : ''" />


                <div id="inputContainer">


                <div class="input-container">

@foreach ($service->ServicePrices as $key => $value)
    <div class="input-set">
        <input type="text" name="title[]" placeholder="Enter name" value="{{ $value->title }}">
        <input type="text" name="price[]" placeholder="Enter price" value="{{ $value->price }}">
        <span class="rajuspan btn btn-danger" onclick="removeInputFields(this)">
            <i class="bx bx-minus">Delete</i>
        </span>
    </div>
@endforeach

<!-- <div class="input-set">
    <button hidden="" onclick="removeInputFields(this)">
        <i class="bx bx-minus btn btn-success">Delete</i>
    </button> -->
    <span class="rajuspan btn btn-success" onclick="addInputFields()">
        <i class="bx bx-plus">Add</i>
    </span>
</div>

</div>

<style>
/* .input-container {
display: flex;
flex-wrap: wrap;
} */

.input-set {
margin-right: 10px; /* Adjust margin as needed */
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
</style>


                    <!-- <div class="input-container"><input type="text" name="title[]" placeholder="Enter name" class="form-control"><input type="text" name="price[]" placeholder="Enter price" class="form-control"><button class="btn btn-danger">Delete</button></div> -->
                </div>




                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i>
                    Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>
<style>


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
{!! JsValidator::formRequest('App\Http\Requests\Admin\ServiceUpdateRequest') !!}
@include('_helpers.image_preview', ['name' => 'image'])
@include('_helpers.multi_inputfield_addon')
@include('_helpers.ck_editor', ['textarea_id' => 'description'])
@include('_helpers.slugify', ['title' => 'name'])
@endpush