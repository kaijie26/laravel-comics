@extends('layouts.app')

@section('header_content')

    @include('partials.header')
    
@endsection


@section('main_content')

    @include('partials.jumbotron')
    @include('components.series-list')
    @include('partials.dc-link')

     
@endsection



