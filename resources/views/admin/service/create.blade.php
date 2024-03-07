@extends('layouts.master')

@section('content')
<div class="container-xxl">

  <x-breadcrumb listRoute="{{ route('admin.services.index') }}" model="Service" item="Create"></x-breadcrumb>








  <div class="  container active card" >
    <div class="card-body">

      <x-form.wrapper action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        <x-form.row>
          <x-form.input type="file" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
        </x-form.row>
        <x-form.preview id="featured-thumb" . />
        <x-form.row>
          <x-form.input type="text" col="6" :req="true" label="Name" id="name" name="name" value="{{ old('name') }}" />
          <x-form.input type="text" col="6" :req="true" label="Slug" id="slug" name="slug" value="{{ old('slug') }}" />
        </x-form.row>
        <x-form.textarea label="Description" id="description" name="description" value="{{ old('description') }}" rows="5" cols="5" />


        <label class="form-label mt-3" for="service_type">Service Type</label>
<select name="service_type" id="service_type" class="form-select mb-3">
    <option value="Dental Service">Dental Service</option>
    <option value="Reason For Choosing Us">Reason For Choosing Us</option>
</select>




        <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="'checked'" />

     
        <div id="inputContainer">


          <div class="input-container">
            <input type="text" name="title[]" class="form-control" placeholder="Enter name" >
            <input type="text" name="price[]" class="form-control ms-2 me-2" placeholder="Enter price" >
            <span class="  rajuspan btn btn-success" onclick="addInputFields()"><i class="bx bx-plus">Add</i></span>
            <span class="  rajuspan btn btn-danger mt-2" hidden onclick="removeInputFields(this)"><i class="bx bx-minus">Delete</i></span>


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
 
   
  }

 
</style>


<script>
  function showTab(tabId) {
    var tab = new bootstrap.Tab(document.querySelector(`[href="#${tabId}"]`));
    tab.show();
  }
</script>






@endsection

@push('custom_js')
<!-- {!! JsValidator::formRequest('App\Http\Requests\Admin\ServiceRequest') !!} -->
@include('_helpers.image_preview', ['name' => 'image'])
@include('_helpers.ck_editor', ['textarea_id' => 'description'])
@include('_helpers.slugify', ['title' => 'name'])
@include('_helpers.multi_inputfield_addon')
@endpush