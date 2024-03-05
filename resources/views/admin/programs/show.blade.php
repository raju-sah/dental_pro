<table class="table table-hover table-striped">

  <tbody>
    <tr>
      <td class="text-uppercase text-14 font-weight-bold">Image</td>
      <td>
        @foreach($program->images as $image)
        <img src="{{asset('uploaded-images/programs-images/'.$image->image_name)}}" height="50px" max-width="20px" alt="{{$image->id}}" class="card-img">
        @endforeach
      </td>
      <style>
        .card-img {
          border-radius: 5px;
          max-width: 70px;
          border: 1px solid #6196A6;
          margin-left: 10px;

        }
      </style>
    </tr>
    <tr>
      <td class="text-uppercase text-14"> title</td>
      <td>{{$program->title ?? 'N/A'}}</td>

    </tr>
    <tr>
      <td class="text-uppercase text-14">slug</td>
      <td>{{$program->slug ?? 'N/A'}}</td>

    </tr>

    <tr>
      <td class="text-uppercase text-14">description</td>
      <td>{!!$program->description !!}</td>

    </tr>

    <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($program->status == 1)
      <td>Active</td>
      @elseif ($program->status == 0)
      <td>Inactive</td>
      @endif


    </tr>

    <tr>
      <td class="text-uppercase text-14">created_at</td>
      <td>{{$program->created_at}}</td>

    </tr>
    <tr>
      <td class="text-uppercase text-14">updated_at</td>
      <td>{{$program->updated_at}}</td>

    </tr>
  </tbody>


  <style>
    .text-uppercase {
      font-weight: 800;
    }

    tr:nth-child(even) {
      background-color: #dee2e6;
    }
  </style>
</table>