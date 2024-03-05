@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="Appointment"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.appointments.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['name','address','email','date','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($appointments as $appointment)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$appointment->name}}</x-table.td>
                        
                        
                        
                        <x-table.td>{{$appointment->address}}</x-table.td>
                        
                        <x-table.td>{{$appointment->email}}</x-table.td>
                        
                        
                        <x-table.td>{{$appointment->date}}</x-table.td>
                        
                        <x-table.switch :model="$appointment" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.appointments.show', ':id')}}" id="{{$appointment->id}}" model="Appointment" name="appointment"/>

                                <!-- <x-table.edit_btn route-edit="{{route('admin.appointments.edit', $appointment->id) }}"/> -->

                                <x-table.delete_btn route-destroy="{{route('admin.appointments.destroy', $appointment->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$appointment->id}}" model="Appointment" />

                @empty
                @endforelse

            </tbody>
          </table>
          </div>
        </div>
    </div>
</div>

@endsection

@push('custom_js')
    @include('_helpers.modal_script',['name' => 'appointment', 'route' => route('admin.appointments.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-appointment')])
    @include('_helpers.swal_delete')
@endpush
