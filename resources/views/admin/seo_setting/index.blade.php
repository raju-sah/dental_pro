@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="SeoSetting"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.seo-settings.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['site_title','home_title','site_description','keyword','google_analytics','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($seo_settings as $seo_setting)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$seo_setting->site_title}}</x-table.td>
                        
                        <x-table.td>{{$seo_setting->home_title}}</x-table.td>
                        
                        <x-table.td>{{$seo_setting->site_description}}</x-table.td>
                        
                        <x-table.td>{{$seo_setting->keyword}}</x-table.td>
                        
                        <x-table.td>{{$seo_setting->google_analytics}}</x-table.td>
                        
                        <x-table.switch :model="$seo_setting" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.seo-settings.show', ':id')}}" id="{{$seo_setting->id}}" model="SeoSetting" name="seo_setting"/>

                                <x-table.edit_btn route-edit="{{route('admin.seo-settings.edit', $seo_setting->id) }}"/>

                                <x-table.delete_btn route-destroy="{{route('admin.seo-settings.destroy', $seo_setting->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$seo_setting->id}}" model="SeoSetting" />

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
    @include('_helpers.modal_script',['name' => 'seo_setting', 'route' => route('admin.seo-settings.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-seo_setting')])
    @include('_helpers.swal_delete')
@endpush
