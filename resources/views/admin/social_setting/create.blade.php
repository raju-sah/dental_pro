@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.social-settings.index')}}" model="SocialSetting" item="Create"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.social-settings.store')}}" method="POST" enctype="multipart/form-data">
                        <x-form.input type="text" label="Facebook_link" id="facebook_link" name="facebook_link" value="{{ old('facebook_link') }}"/>
<x-form.input type="text" label="Instagram_link" id="instagram_link" name="instagram_link" value="{{ old('instagram_link') }}"/>
<x-form.input type="text" label="Twitter_link" id="twitter_link" name="twitter_link" value="{{ old('twitter_link') }}"/>
<x-form.input type="text" label="Tiktok_link" id="tiktok_link" name="tiktok_link" value="{{ old('tiktok_link') }}"/>
<x-form.input type="text" label="Whatsapp_no" id="whatsapp_no" name="whatsapp_no" value="{{ old('whatsapp_no') }}"/>
<x-form.input type="text" label="Viber_no" id="viber_no" name="viber_no" value="{{ old('viber_no') }}"/>
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="true"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>

            </div>
        </div>
    </div>

@endsection

@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\SocialSettingRequest') !!}
    
@endpush
