@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.feedback.index')}}" model="Feedback" item="Edit"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.feedback.update', $feedback->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        <x-form.input type="text" label="Name" id="name" name="name" value="{{$feedback->name}}"/>
<x-form.input type="text" label="Location" id="location" name="location" value="{{$feedback->location}}"/>
<x-form.input type="file" label="Image" id="image" name="image" alt="image" accept="image/*" onchange="previewThumb(this,'featured-thumb')" />
<x-form.preview id="featured-thumb". url="{{$feedback->image_path}}"/>
<x-form.input type="text" label="Service" id="service" name="service" value="{{$feedback->service}}"/>
<x-form.textarea label="Feedback" id="feedback" name="feedback" value="{{$feedback->feedback}}" rows="5" cols="5" />
<x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$feedback->status ? 'checked' : ''"/>

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>
            </div>
        </div>
    </div>

@endsection
@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\FeedbackUpdateRequest') !!}
    @include('_helpers.image_preview',['name' => 'image'])
@endpush
