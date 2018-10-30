@include('home1')
<div class="container">
    <div class="row">
    <div class="col-md-6">
    <form class="form-horizontal" method="POST" action="{{url('/edit',array($artical2s->id))}}">
      {{csrf_field()}}
  <fieldset>
    <legend>Login</legend>

    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
    @endforeach
    @endif

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" name="Email"class="form-control" id="inputEmail" value="<?php echo $artical2s->Email;?>"placeholder="Email">
      </div>
    </div>
    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="Password"class="form-control" id="inputPassword"value="<?php echo $artical2s->Password;?>" placeholder="Password">
      </div>
      <br>
    
    </div>
   
    </div>
    <div class="form-group">
     
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" class="btn btn-primary">Update</button>
       
     <a href="{{url('/')}}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>
</div>
@include('footer')