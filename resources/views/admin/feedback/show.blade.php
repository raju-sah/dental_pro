<table class="table table-hover table-striped">
    
    <tbody>
      <tr>
        <td class="text-uppercase text-14">Image</td>
        <td ><img src="{{$feedback->image_path}}" height="100px" width="100px" alt="image"></td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14"> Full Name</td>
        <td>{{$feedback->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">location</td>
        <td>{{$feedback->location}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">service</td>
        <td>{{$feedback->service}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">feedback</td>
        <td>{!!$feedback->feedback !!}</td>
       
      </tr>
     
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($feedback->status == 1)
      <td>Active</td>
      @elseif ($feedback->status == 0)
      <td>Inactive</td>
      @endif
      
       
      </tr>
      
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$feedback->created_at}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">updated_at</td>
        <td>{{$feedback->updated_at}}</td>
       
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