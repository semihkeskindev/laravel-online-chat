@extends('layouts.master')

@section('content')
    <div id="app">
        <chat-component></chat-component>

    </div>
@stop

@section('footer')
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    <script src="{{ asset('toastr.js')}}"></script>
    <script>
    </script>
@stop