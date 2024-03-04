@extends('layouts.master')

@section('content')

<div class="container-xxl">

     <x-breadcrumb model="NewsLetter"></x-breadcrumb>

    <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-end">
            <!-- <a href="{{route('admin.news-letters.create')}}" class="btn btn-sm btn-dark mb-2"><i class='bx bx-xs bx-plus'> </i>Create</a> -->
          </div>

        <div class="table-responsive no-wrap">
          <table class="table" id="datatable">

           <x-table.header :headers="['email','status', 'Actions']" />

             <tbody id="tablecontents">
                @forelse ($news_letters as $news_letter)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <x-table.td>{{$news_letter->email}}</x-table.td>
                        
                        <x-table.switch :model="$news_letter" />

                      <td style="width:150px">
                            <div class="actions d-flex">
                                <x-table.view_btn route-view="{{route('admin.news-letters.show', ':id')}}" id="{{$news_letter->id}}" model="NewsLetter" name="news_letter"/>

                                <!-- <x-table.edit_btn route-edit="{{route('admin.news-letters.edit', $news_letter->id) }}"/> -->

                                <x-table.delete_btn route-destroy="{{route('admin.news-letters.destroy', $news_letter->id ) }}"/>
                            </div>
                      </td>
                    </tr>

                    <x-table.show_modal id="{{$news_letter->id}}" model="NewsLetter" />

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
    @include('_helpers.modal_script',['name' => 'news_letter', 'route' => route('admin.news-letters.show', ':id')])
    @include('_helpers.datatable')
    @include('_helpers.status_change', ['url' => url('admin/status-change-news_letter')])
    @include('_helpers.swal_delete')
@endpush
