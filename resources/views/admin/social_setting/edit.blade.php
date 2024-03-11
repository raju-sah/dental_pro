@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.social-settings.index')}}" model="SocialSetting" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.social-settings.update', $social_setting->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')

                <x-form.row>
                    <x-form.input type="text" col="6" :req="true" label="Facebook link" id="facebook_link" name="facebook_link" value="{{$social_setting->facebook_link}}" />
                    <x-form.input type="text" col="6" :req="true" label="Instagram link" id="instagram_link" name="instagram_link" value="{{$social_setting->instagram_link}}" />
                    </x-form.row>
                    <x-form.row>
                    <x-form.input type="text" col="6" label="Twitter link" id="twitter_link" name="twitter_link" value="{{$social_setting->twitter_link}}" />
                    <x-form.input type="text" col="6" label="Tiktok link" id="tiktok_link" name="tiktok_link" value="{{$social_setting->tiktok_link}}" />
                    </x-form.row>
                    <x-form.row>
                    <x-form.input type="text" col="6" label="Whatsapp no" id="whatsapp_no" name="whatsapp_no" value="{{$social_setting->whatsapp_no}}" />
                    <x-form.input type="text"   col="6" label="Viber no" id="viber_no" name="viber_no" value="{{$social_setting->viber_no}}" />
                    </x-form.row>
                    <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$social_setting->status ? 'checked' : ''" />

                    <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>

@endsection
@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\SocialSettingUpdateRequest') !!}

@endpush