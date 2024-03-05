<table class="table table-hover table-striped">
    
    <tbody>
     
      <tr>
      <td class="text-uppercase text-14"> Full Name</td>
        <td>{{$appointment->name}}</td>
        
      </tr>
      <tr>
      <td class="text-uppercase text-14">address</td>
        <td>{{$appointment->address}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">phone</td>
        <td>{{$appointment->phone}}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">age</td>
        <td>{{$appointment->age }}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">email</td>
        <td>{{$appointment->email }}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">service Type</td>
        <td>{{$appointment->service_id }}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">message</td>
        <td>{{$appointment->message }}</td>
       
      </tr>
      <tr>
      <td class="text-uppercase text-14">date</td>
        <td>{{$appointment->date }}</td>
       
      </tr>
     
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($appointment->status == 1)
      <td>Active</td>
      @elseif ($appointment->status == 0)
      <td>Inactive</td>
      @endif
      
       
      </tr>
      
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$appointment->created_at}}</td>
       
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