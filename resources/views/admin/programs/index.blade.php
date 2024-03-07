@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="Programs"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.programs.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['title','image','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($programs as $programs)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$programs->title}}</x-table.td>
                      
                                                                        
                        <x-table.table_image name="{{$programs->image }}" url="{{$programs->image_path }}"/><x-table.switch :model="$programs" />
                       
                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.programs.show', ':id')}}" id="{{$programs->id}}" model="Programs" name="programs"/>

                                <x-table.edit_btn route-edit="{{route('admin.programs.edit', $programs->id) }}"/>

                                <x-table.delete_btn route-destroy="{{route('admin.programs.destroy', $programs->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$programs->id}}" model="Programs" />

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
    @include('_helpers.modal_script',['name' => 'programs', 'route' => route('admin.programs.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-programs')])
    @include('_helpers.swal_delete')
@endpush
