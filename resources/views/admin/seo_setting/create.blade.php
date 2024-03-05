@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.seo-settings.index')}}" model="SeoSetting" item="Create"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.seo-settings.store')}}" method="POST" enctype="multipart/form-data">
                        <x-form.input type="text" label="Site_title" id="site_title" name="site_title" value="{{ old('site_title') }}"/>
<x-form.input type="text" label="Home_title" id="home_title" name="home_title" value="{{ old('home_title') }}"/>
<x-form.input type="text" label="Site_description" id="site_description" name="site_description" value="{{ old('site_description') }}"/>
<x-form.input type="text" label="Keyword" id="keyword" name="keyword" value="{{ old('keyword') }}"/>
<x-form.input type="text" label="Google_analytics" id="google_analytics" name="google_analytics" value="{{ old('google_analytics') }}"/>
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="true"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>

            </div>
        </div>
    </div>

@endsection

@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\SeoSettingRequest') !!}
    
@endpush
