<table class="table table-hover table-striped">
    
    <tbody>
      <tr>
        <td class="text-uppercase text-14">Image</td>
        <td ><img src="{{$team->image_path}}" height="100px" width="100px" alt="image"></td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">Name</td>
        <td>{{$team->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">slug</td>
        <td>{{$team->slug}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">Department</td>
        <td>{{$team->department}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">whatspapp_no</td>
        <td>{{$team->whatspapp_no}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">facebook_url</td>
        <td>{{$team->facebook_url}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">instagram_url</td>
        <td>{{$team->instagram_url}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($team->status == 1)
      <td>Active</td>
      @elseif ($team->status == 0)
      <td>Inactive</td>
      @endif
       
      </tr>
      
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$team->created_at}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase  text-14">updated_at</td>
        <td>{{$team->updated_at}}</td>
       
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