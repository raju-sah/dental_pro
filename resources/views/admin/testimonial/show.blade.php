<div class="row align-items-center  ">
    <div class="card-content mt-2"><b class="d-block text-uppercase text-14">name</b><span>{{ $testimonial->name }}</span>
    </div>
    <hr>
    <div class="card-content mt-2"><b class="d-block text-uppercase text-14">slug</b><span>{{ $testimonial->slug }}</span>
    </div>
    <div class="card-content mt-2"><b
            class="d-block text-uppercase text-14">description</b><span>{!!$testimonial->description !!}</span></div>
    <div class="card-content mt-2"><b class="d-block text-uppercase text-14">image</b><x-table.table_image
            name="{{ $testimonial->image }}" url="{{ $testimonial->image_path }}" />
        <div class="card-content mt-2"><b
                class="d-block text-uppercase text-14">status</b><span>{{ $testimonial->status }}</span></div>

    </div>
</div>
