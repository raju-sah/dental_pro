@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.news-letters.index')}}" model="NewsLetter" item="Edit"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.news-letters.update', $news_letter->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        <x-form.input type="text" label="Email" id="email" name="email" value="{{$news_letter->email}}"/>
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$news_letter->status ? 'checked' : ''"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>
            </div>
        </div>
    </div>

@endsection
@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\NewsLetterUpdateRequest') !!}
    
@endpush
