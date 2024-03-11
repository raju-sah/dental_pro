<table class="table ">
    
    <tbody>
      <tr>
        <td class="text-uppercase text-14">Image</td>
        <td ><img src="{{$slider->image_path}}" height="100px" width="100px" alt="image"></td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">Name</td>
        <td>{{$slider->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">slug</td>
        <td>{{$slider->slug }}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">Description</td>
      <td>{!! $slider->description ?? 'N/A' !!}</td>

       
      </tr>
      <tr>
      <td class="text-uppercase text-14">Url</td>
      <td>{!! $slider->url ?? 'N/A' !!}</td>

       
      </tr>
      
     
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($slider->status == 1)
      <td>Active</td>
      @elseif ($slider->status == 0)
      <td>Inactive</td>
      @endif
      
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$slider->created_at}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">updated_at</td>
        <td>{{$slider->updated_at}}</td>
       
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