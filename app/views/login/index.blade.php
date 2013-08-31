@extends('templates.master')

@section('content')
    <h2>Login</h2>
    <hr/>
    <a href="{{url()}}/login/social">Sign in with Twitter</a>
    <hr/>
    <form role="form" action="#">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    
@stop


