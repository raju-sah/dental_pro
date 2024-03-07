<table class="table table-hover table-striped">

  <tbody>
    <tr>
      <td class="text-uppercase text-14 font-weight-bold">Image</td>
      <td>
        @foreach($gallery->images as $image)
        <img src="{{asset('uploaded-images/gallery-images/'.$image->image_name)}}" height="50px" max-width="20px" alt="{{$image->id}}" class="card-img">
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
      <td class="text-uppercase text-14">created_at</td>
      <td>{{$gallery->created_at}}</td>

    </tr>
    <tr>
      <td class="text-uppercase text-14">updated_at</td>
      <td>{{$gallery->updated_at}}</td>

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