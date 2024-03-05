@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.seo-settings.index')}}" model="SeoSetting" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.seo-settings.update', $seo_setting->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                <x-form.row>
                <x-form.input type="text" col="6" :req="true" label="Site_title" id="site_title" name="site_title" value="{{$seo_setting->site_title}}" />
                <x-form.input type="text" col="6" :req="true" label="Home_title" id="home_title" name="home_title" value="{{$seo_setting->home_title}}" />
                </x-form.row>
                <x-form.row>
                <x-form.input type="text" col="6" label="Site_description" id="site_description" name="site_description" value="{{$seo_setting->site_description}}" />
                <x-form.input type="text" col="6" label="Keyword" id="keyword" name="keyword" value="{{$seo_setting->keyword}}" />
                </x-form.row>
                <x-form.input type="text" label="Google_analytics" id="google_analytics" name="google_analytics" value="{{$seo_setting->google_analytics}}" />
                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$seo_setting->status ? 'checked' : ''" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>

@endsection
@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\SeoSettingUpdateRequest') !!}

@endpush