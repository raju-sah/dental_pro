<table class="table table-hover table-striped">
    
    <tbody>
      
      <tr>
      <td class="text-uppercase text-14"> Name</td>
        <td>{{$contact->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">email</td>
        <td>{{$contact->email}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">subject</td>
        <td>{{$contact->subject}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">message</td>
        <td>{{$contact->message}}</td>
       
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