@extends('templates.master')

@section('content')
    <h2>Login</h2>
    <hr/>

    @if (Session::has('flash_notice'))
        <div class="alert alert-success">{{ Session::get('flash_notice') }}</div>
    @endif
    
    {{Form::open(array('url' => 'login/login', 'method' => 'post'))}}

    <!-- check for login error flash var -->
    @if ($errors->has('login'))
        <div class="alert alert-warning">{{$errors->first('login', ':message') }}</div>
    @endif

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


