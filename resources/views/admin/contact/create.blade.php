@extends('layouts.master')

@section('content')

    <div class="container-xxl">

        <x-breadcrumb listRoute="{{route('admin.contacts.index')}}" model="Contact" item="Create"></x-breadcrumb>

        <div class="card">
            <div class="card-body">

                <x-form.wrapper action="{{route('admin.contacts.store')}}" method="POST" enctype="multipart/form-data">
                        <x-form.input type="text" label="Name" id="name" name="name" value="{{ old('name') }}"/>
<x-form.input type="text" label="Email" id="email" name="email" value="{{ old('email') }}"/>
<x-form.input type="text" label="Subject" id="subject" name="subject" value="{{ old('subject') }}"/>
<x-form.textarea label="Message" id="message" name="message" value="{{ old('message') }}" rows="5" cols="5" />

                        <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
                </x-form.wrapper>

            </div>
        </div>
    </div>

@endsection

@push('custom_js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\ContactRequest') !!}
    
@endpush
