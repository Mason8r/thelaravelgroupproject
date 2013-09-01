@extends('templates.master')

@section('content')
    {{Sentry::getUser()}}
@stop