<div class="row align-items-center  ">
    <div class="card-content mt-2"><b class="d-block text-uppercase text-14">name</b><span>{{$slider->name}}</span></div>
<div class="card-content mt-2"><b class="d-block text-uppercase text-14">url</b><span>{{$slider->url}}</span></div>
<div class="card-content mt-2"><b class="d-block text-uppercase text-14">description</b><span>{{$slider->description}}</span></div>
<div class="card-content mt-2"><b class="d-block text-uppercase text-14">image</b><x-table.table_image name="{{$slider->image }}" url="{{$slider->image_path }}"/><div class="card-content mt-2"><b class="d-block text-uppercase text-14">status</b><span>{{$slider->status}}</span></div>

</div>
</div>
