@extends('layouts.master')

@section('content')
    <div id="app">
        <chat-component></chat-component>

    </div>
@stop

@section('footer')
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    <script>
        Echo.channel('laravel_database_chat-message-event').listen('ChatMessageEvent', (msg) => {
            $('.chat-reader').append(msg.title + ': ' + msg.message + '<br>');
            console.log(`<p>title: ${msg.title} , message ${msg.message}</p>`)
        });

        function callEvent(chatMessage) {
            axios.post('/chat', {
                message: chatMessage
            })
                .then((response) => {
                    $('input[name=chat-input]').val('');
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    </script>
@stop