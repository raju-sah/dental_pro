@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="Slider"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.sliders.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['name','url','description','image','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($sliders as $slider)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$slider->name}}</x-table.td>
                        
                        <x-table.td>{{$slider->url}}</x-table.td>
                        
                        <x-table.td>{{$slider->description}}</x-table.td>
                        
                        <x-table.table_image name="{{$slider->image }}" url="{{$slider->image_path }}"/><x-table.switch :model="$slider" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.sliders.show', ':id')}}" id="{{$slider->id}}" model="Slider" name="slider"/>

                                <x-table.edit_btn route-edit="{{route('admin.sliders.edit', $slider->id) }}"/>

                                <x-table.delete_btn route-destroy="{{route('admin.sliders.destroy', $slider->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$slider->id}}" model="Slider" />

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
    @include('_helpers.modal_script',['name' => 'slider', 'route' => route('admin.sliders.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-slider')])
    @include('_helpers.swal_delete')
@endpush
