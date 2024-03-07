@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="Feedback"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.feedback.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['name','location','image','service','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($feedback as $feedback)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$feedback->name}}</x-table.td>
                        
                        <x-table.td>{{$feedback->location}}</x-table.td>
                        
                        <x-table.table_image name="{{$feedback->image }}" url="{{$feedback->image_path }}"/><x-table.td>{{$feedback->service}}</x-table.td>
                        
                        <x-table.switch :model="$feedback" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.feedback.show', ':id')}}" id="{{$feedback->id}}" model="Feedback" name="feedback"/>


                                <x-table.delete_btn route-destroy="{{route('admin.feedback.destroy', $feedback->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$feedback->id}}" model="Feedback" />

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
    @include('_helpers.modal_script',['name' => 'feedback', 'route' => route('admin.feedback.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-feedback')])
    @include('_helpers.swal_delete')
@endpush
