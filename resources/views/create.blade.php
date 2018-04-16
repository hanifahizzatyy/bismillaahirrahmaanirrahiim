@include('inc.header')
  <div class="container">
    <div class="row">
    	 <div class="col-md-6">
    	 	<form class="form-horizontal" method="POST" action="{{ url('/insert') }}">
        {{csrf_field()}}
  <fieldset>
    <legend>Give your Best word</legend>
    @if(count($errors) >0)
       @foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{$error}}
          </div>
       @endforeach
    @endif
    <div class="form-group">
      <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
      	
        <textarea name="description" class="form-control" placeholder="Description" ></textarea>
      </div>
    </div>
    <div class="col-lg-10 col-lg-offset-2">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
  </div>
  </fieldset>
</form>
    	 </div>
    </div>	
  </div>
@include('inc.footer')

