@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="Gallery"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.galleries.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['image', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($galleries as $gallery)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.table_image name="{{$gallery->image }}" url="{{$gallery->image_path }}"/>

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.galleries.show', ':id')}}" id="{{$gallery->id}}" model="Gallery" name="gallery"/>

                                <x-table.edit_btn route-edit="{{route('admin.galleries.edit', $gallery->id) }}"/>

                                <x-table.delete_btn route-destroy="{{route('admin.galleries.destroy', $gallery->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$gallery->id}}" model="Gallery" />

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
    @include('_helpers.modal_script',['name' => 'gallery', 'route' => route('admin.galleries.show', ':id')])
    @include('_helpers.datatable')
    
    @include('_helpers.swal_delete')
@endpush
