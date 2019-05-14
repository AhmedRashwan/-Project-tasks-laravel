@extends('layout')
@section('tabTitle')
    contactUs Page
@endsection()

@section('pageTitle')
    <h3> contact Us Page </h3>
    <ul>
            @foreach($tasks as $element)
            <li>{{$element}}</li>
                @endforeach
        </ul>
@endsection()
