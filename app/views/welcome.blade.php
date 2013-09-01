@extends('templates.master')

@section('content')

    @if (Session::has('flash_notice'))
        <div class="alert alert-success">{{ Session::get('flash_notice') }}</div>
    @endif
    
    <h2>Welcome, Gambler.</h2>

@stop