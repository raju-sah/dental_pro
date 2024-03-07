@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.general-settings.index')}}" model="GeneralSetting" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.general-settings.update', $general_setting->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                <x.form.row>
                <x-form.input type="file" :req="true" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
                <x-form.preview id="featured-thumb" . url="{{$general_setting->image_path}}" />
                </x.form.row>
                <x-form.row>
                <x-form.input type="text" label="Name" col="6" :req="true" id="name" name="name" value="{{$general_setting->name}}" />
                <x-form.input type="text" label="Slug" col="6" :req="true" id="slug" name="slug" value="{{$general_setting->slug}}" />
                </x-form.row>

                <x-form.row>
                <x-form.input type="text" label="Address" col="6" id="address" name="address" value="{{$general_setting->address}}" />
                <x-form.input type="email" label="Email" col="6" id="email" name="email" value="{{$general_setting->email}}" />
                </x-form.row>
                <x-form.row>
                <x-form.input type="number" label="Phone" col="6" id="phone" name="phone" value="{{$general_setting->phone}}" />
                <x-form.select label="Office Open Days" col="6"  :options="\App\Enums\OfficeOpenWeek::cases()" name="office_open_week" value="{{$general_setting->office_open_week}}"></x-form.select>
                <!-- <x-form.input type="text" label="Office_open_week" col="6" id="office_open_week" name="office_open_week" value="{{$general_setting->office_open_week}}" /> -->
                </x-form.row>
                <x-form.row>
                <x-form.select label="Office closed Days" col="6"  :options="\App\Enums\OfficeClosedDay::cases()" name="office_closed_week" value="{{$general_setting->office_closed_week}}"></x-form.select>
                <x-form.input type="text" label="Mobile" col="6" id="mobile" name="mobile" value="{{$general_setting->mobile}}" />
                </x-form.row>
                <x-form.row>
                <x-form.input type="text" label="Office_time" colo="6" id="office_time" name="office_time" placeholder="10:00 AM - 6:00 PM" value="{{$general_setting->office_time}}" />
                <x-form.input type="text" label="Map Url" colo="6" id="map_url" name="map_url" value="{{$general_setting->map_url}}" />
                </x-form.row>
                <x-form.textarea label="Description"  id="description" name="description" value="{{$general_setting->description}}" rows="5" cols="5" />
                
                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$general_setting->status ? 'checked' : ''" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>

@endsection
@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\GeneralSettingUpdateRequest') !!}
@include('_helpers.image_preview',['name' => 'image'])
@include('_helpers.slugify', ['title' => 'name'])
@endpush