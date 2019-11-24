@extends('footer')
@extends('index')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('/fontent/img/about-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Posts</h1>
            <span class="subheading">All Catagoris Posts</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <a href="#" class="btn btn-info">Creat Post</a>
        <a href="#" class="btn btn-danger">All Posts</a>
        <hr>
      <form action="{{('stor')}}"   method="get">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Post Title</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea  row="6" class="form-control" name="disription" placeholder="Description"></textarea>
  </div>
  <div class="form-group">
  <label for="exampleCheck1">Post Photo</label>
    <input type="file" name="image" class="form-control-file" id="file">
  </div>
  <button type="submit" name="send" class="btn btn-primary">Done</button>
</form>
        </div>
    </div>
  </div>
  <hr>
  
@endsection


