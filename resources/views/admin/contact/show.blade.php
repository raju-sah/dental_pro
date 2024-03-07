<table class="table table-hover table-striped">
    
    <tbody>
      
      <tr>
      <td class="text-uppercase text-14"> Title</td>
        <td>{{$contact->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">slug</td>
        <td>{{$contact->slug}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">description</td>
        <td>{{$contact->description}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">url</td>
        <td>{{$contact->url}}</td>
       
      </tr>
     
     
     
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($contact->status == 1)
      <td>Active</td>
      @elseif ($contact->status == 0)
      <td>Inactive</td>
      @endif
      
       
      </tr>
      
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$contact->created_at}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">updated_at</td>
        <td>{{$contact->updated_at}}</td>
       
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