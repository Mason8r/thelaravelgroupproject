@extends('templates.master')

@section('content')
           <h2>Say Hello</h2>
           <form role="form">
            <input type="text" class="form-control" placeholder="Name">
            <br />
            <input type="text" class="form-control" placeholder="Email">
            <br />
            <textarea class="form-control" rows="3">Comment</textarea>
            <br />
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
@stop

