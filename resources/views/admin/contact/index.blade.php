@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="Contact"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <!-- <a href="{{route('admin.contacts.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a> -->
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['name','email','subject','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($contacts as $contact)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$contact->name}}</x-table.td>
                        
                        <x-table.td>{{$contact->email}}</x-table.td>
                        
                        <x-table.td>{{$contact->subject}}</x-table.td>
                     
                        <x-table.switch :model="$contact" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.contacts.show', ':id')}}" id="{{$contact->id}}" model="Contact" name="contact"/>

                                <x-table.delete_btn route-destroy="{{route('admin.contacts.destroy', $contact->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$contact->id}}" model="Contact" />

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
    @include('_helpers.modal_script',['name' => 'contact', 'route' => route('admin.contacts.show', ':id')])
    @include('_helpers.datatable')
    
    @include('_helpers.swal_delete')
@endpush
