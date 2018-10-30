@include('home1')
<html>
  <head></head>
  <body>
    <h1>This is Home Page</h1>
<div class="container">
  <div class="row">
    <legend>Tables</legend>

    @if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif

  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($artical2s)>0)
    @foreach($artical2s as $artical2)

    <tr>
    <td>{{$artical2->id}}</td>
      <td>{{$artical2->Email}}</td>
      <td>{{$artical2->Password}}</td>
      <td>
      
        <a href='{{url("/update/{$artical2->id}")}}' class="label label-primary">Update</a>
        <a href='{{url("/delete/{$artical2->id}")}}' class="label label-primary">Delete</a>
 
      </td>
    </tr>
    @endforeach        
    @endif
  </tbody>
</table> 
</div>
</div>
</body>
</html>
@include('footer')