@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="GeneralSetting"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <a href="{{route('admin.general-settings.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a>
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['facebook_link','instagram_link','twitter_link','tiktok_link','whatsapp_no','viber_no','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($general_settings as $general_setting)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$general_setting->facebook_link}}</x-table.td>
                        
                        <x-table.td>{{$general_setting->instagram_link}}</x-table.td>
                        
                        <x-table.td>{{$general_setting->twitter_link}}</x-table.td>
                        
                        <x-table.td>{{$general_setting->tiktok_link}}</x-table.td>
                        
                        <x-table.td>{{$general_setting->whatsapp_no}}</x-table.td>
                        
                        <x-table.td>{{$general_setting->viber_no}}</x-table.td>
                        
                        <x-table.switch :model="$general_setting" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.general-settings.show', ':id')}}" id="{{$general_setting->id}}" model="GeneralSetting" name="general_setting"/>

                                <x-table.edit_btn route-edit="{{route('admin.general-settings.edit', $general_setting->id) }}"/>

                                <x-table.delete_btn route-destroy="{{route('admin.general-settings.destroy', $general_setting->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$general_setting->id}}" model="GeneralSetting" />

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
    @include('_helpers.modal_script',['name' => 'general_setting', 'route' => route('admin.general-settings.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-general_setting')])
    @include('_helpers.swal_delete')
@endpush
