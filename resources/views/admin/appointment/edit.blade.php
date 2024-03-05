@extends('layouts.master')

@section('content')

<div class="container-xxl">

    <x-breadcrumb listRoute="{{route('admin.appointments.index')}}" model="Appointment" item="Edit"></x-breadcrumb>

    <div class="card">
        <div class="card-body">

            <x-form.wrapper action="{{route('admin.appointments.update', $appointment->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                <x-form.row>
                <x-form.input type="text" col="6" :req="true" label="Name" id="name" name="name" value="{{$appointment->name}}" />
                <x-form.input type="text" col="6" :req="true" label="Phone" id="phone" name="phone" value="{{$appointment->phone}}" />
                </x-form.row>
                <x-form.row>
                <x-form.input type="text" col="6" :req="true" label="Age" id="age" name="age" value="{{$appointment->age}}" />
                <x-form.input type="text" col="6" :req="true" label="Address" id="address" name="address" value="{{$appointment->address}}" />
                </x-form.row>
                <x-form.row>
                <x-form.input type="text" col="6" :req="true" label="Email" id="email" name="email" value="{{$appointment->email}}" />
                <x-form.input type="text" label="Message" id="message" name="message" value="{{$appointment->message}}" />
                </x-form.row>

                <x-form.input type="text" col="6" :req="true" label="Date" id="date" name="date" value="{{$appointment->date}}" />
                <x-form.checkbox label="Status" id="status" name="status" value="1" class="form-check-input" isEditMode="yes" :isChecked="$appointment->status ? 'checked' : ''" />

                <x-form.button class="btn btn-sm btn-dark" type="submit"><i class='bx bx-save bx-xs'></i> Save</x-form.button>
            </x-form.wrapper>
        </div>
    </div>
</div>

@endsection
@push('custom_js')
{!! JsValidator::formRequest('App\Http\Requests\Admin\AppointmentUpdateRequest') !!}

@endpush