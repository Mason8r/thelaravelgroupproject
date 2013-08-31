@extends('templates.master')

@section('content')

    @if (Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif
    
    <h2>Welcome, Gambler.</h2>
    
    @if( isset ( Auth::user()->email ) )

    <h3>oh, hello {{Auth::user()->email}}</h3>

    @endif

@stop