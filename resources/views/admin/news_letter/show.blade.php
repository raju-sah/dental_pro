<table class="table table-hover table-striped">
    
    <tbody>
     
      <tr>
      <td class="text-uppercase text-14">Email</td>
        <td>{{$news_letter->email}}</td>
        
      </tr>
    
      <tr>
      <td class="text-uppercase text-14">status</td>
      @if ($news_letter->status == 1)
      <td>Active</td>
      @elseif ($news_letter->status == 0)
      <td>Inactive</td>
      @endif
      
       
      </tr>
      
      <tr>
      <td class="text-uppercase text-14">created_at</td>
        <td>{{$news_letter->created_at}}</td>
       
      </tr>
      <!-- <tr>
      <td class="text-uppercase text-14">updated_at</td>
        <td>{{$news_letter->updated_at}}</td>
       
      </tr> -->
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