@extends('templates.master')

@section('content')
    <h2>Login</h2>
    <hr/>
    <!-- check for login error flash var -->
    @if (Session::has('flash_error'))
        <div class="alert alert-warning">{{ Session::get('flash_error') }}</div>
    @endif

    {{Form::open(array('url' => 'login', 'method' => 'post'))}}

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <hr />

    <a href="{{url()}}/login/social">Sign in with Twitter</a>
    
    <hr/>
    
@stop


