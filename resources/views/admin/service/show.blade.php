<table class="table table-hover table-striped">
    
    <tbody>
      <tr>
        <td class="text-uppercase text-14">Image</td>
        <td ><img src="{{$service->image_path}}" height="100px" width="100px" alt="image"></td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">Name</td>
        <td>{{$service->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">slug</td>
        <td>{{$service->slug}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">Description</td>
        <td>{!!$service->description !!}</td>
       
      </tr>
     
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($service->status == 1)
      <td>Active</td>
      @elseif ($service->status == 0)
      <td>Inactive</td>
      @endif
      
       
      </tr>
      
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$service->created_at}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">updated_at</td>
        <td>{{$service->updated_at}}</td>
       
      </tr>
    </tbody>


    <style>

       .text-uppercase{
        font-weight: 800;
       }

        tr:nth-child(even) {
  background-color: #dee2e6;
}
    </style>
  </table>