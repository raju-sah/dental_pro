<div class="row align-items-center  ">
    <div class="card-content mt-2"><b class="d-block text-uppercase text-14">name</b><span>{{$service->name}}</span></div>
<div class="card-content mt-2"><b class="d-block text-uppercase text-14">slug</b><span>{{$service->slug}}</span></div>
<div class="card-content mt-2"><b class="d-block text-uppercase text-14">description</b><span>{{$service->description}}</span></div>
<div class="card-content mt-2"><b class="d-block text-uppercase text-14">image</b><x-table.table_image name="{{$service->image }}" url="{{$service->image_path }}"/><div class="card-content mt-2"><b class="d-block text-uppercase text-14">status</b><span>{{$service->status}}</span></div>

</div>
</div>
