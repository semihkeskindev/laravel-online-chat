<template>
    <div class="chatContainer container">
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="chat-section">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9">
                                <h1 class="chat-header-title">Basic Chat</h1>
                            </div>
                            <div class="col-md-3">
                                <h2 class="chat-header-logout"><a @click="logout()" href="javascript:void(0)">Logout</a></h2>
                            </div>
                        </div>
                    </div>
                    <form id="send-chat">
                        <div class="chat-form-class group">
                            <input type="text" name="chat-input" placeholder="Message" autocomplete="off" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                        </div>
                        <button class="btn btn-outline-primary chat-button-gradient chat-button-on-hover">Send</button>
                    </form>
                    <div class="chat-text-box"></div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</template>

<script>
    $(document).on('submit', 'form#send-chat', function (e) {
        e.preventDefault();
        var chatMessage = $('input[name=chat-input]').val();
        if (chatMessage === '') {
            return false;
        }
        callEvent(chatMessage);
    });
    export default {
        mounted() {
            //
        },
        methods: {
            logout() {
                axios.post('/logout', {
                    //
                })
                    .then((response) => {
                        toastr.success('Logged out! Redirecting...');
                        window.location.reload()
                    })
                    .catch(function (error) {
                        toastr.error('Something went wrong! Try again later.');
                    });
            }
        }
    }

    Echo.channel('laravel_database_chat-message-event').listen('ChatMessageEvent', (msg) => {
        $('.chat-text-box').prepend("<div class='chat-text-message d-flex'><p class='mr-auto text-message-content'>" + msg.title + ': ' + msg.message + '</p><p class="text-message-date"></p></div>');
    });

    function callEvent(chatMessage) {
        axios.post('/chat', {
            message: chatMessage
        })
            .then((response) => {
                $('input[name=chat-input]').val('');
            })
            .catch(function (error) {
                toastr.warning('Something went wrong! Try again later.')
            });
    }
</script>

<style>
    h1 {
        color: #111;
        font-family: 'Helvetica Neue', sans-serif;
        margin: 0;
    }

    h2 {
        color: #111;
        font-family: 'Open Sans', sans-serif;
        margin: 0;
    }

    p {
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }

    .chat-text-message {
        color: #333;
        font-family: 'Source Sans Pro', sans-serif;
        padding: 10px 30px;
        background-color: #fff;
        border-radius: 15px;
        display: block;
        margin-bottom: 5px;
    }

    .chat-text-message p {
        margin: 0;
        color: #333;
    }

    .chat-text-box {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        padding: 5px;
        height: 500px;
        background-color: #cfd8dc;
        overflow: scroll;
    }

    .chat-form-class {
        margin: 0 20px;
    }

    .group {
        position: relative;
    }

    input {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        background: transparent;
        font-family: 'Source Sans Pro', sans-serif;;
        height: 45px;
        font-size: 18px;
        padding: 10px 10px 10px 5px;
        display: block;
        width: 300px;
        border: none;
        border-bottom: 1px solid #757575;
    }

    input:focus {
        outline: none;
    }

    label {
        color: #999;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar {
        position: relative;
        display: block;
        width: 300px;
    }

    .bar:before, .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #5264AE;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }

    /* active state */
    input:focus ~ .bar:before, input:focus ~ .bar:after {
        width: 50%;
    }

    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    /* active state */
    input:focus ~ .highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }

    /* ANIMATIONS ================ */
    @-webkit-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }
        to {
            width: 0;
            background: transparent;
        }
    }

    @-moz-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }
        to {
            width: 0;
            background: transparent;
        }
    }

    @keyframes inputHighlighter {
        from {
            background: #5264AE;
        }
        to {
            width: 0;
            background: transparent;
        }
    }

    .chatContainer {
        margin: 0 auto;
    }

    .chat-header-title {
        color: #fff;
    }

    .chat-section .card-header {
        background-color: #263238;
    }

    .chat-button-gradient {
        background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
        box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
    }

    .chat-button-on-hover {
        width: 100px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        margin: 20px;
        height: 35px;
        text-align: center;
        border: none;
        background-size: 300% 100%;

        border-radius: 50px;
        moz-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .chat-button-on-hover:hover {
        background-position: 100% 0;
        moz-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .chat-button-on-hover:focus {
        outline: none;
    }

    .chat-section {
        border: 1px solid #C1C1C1;
        border-radius: 10px 10px 10px 10px;
        overflow: hidden;
    }

    .chat-header-logout {
        text-align: right;
        display: table-cell;
        vertical-align: middle;
    }

    .chat-header-logout a {
        color:#fff;
        text-decoration: none;
    }

    .chat-header-logout a:hover {
        color: #e0e0e0;
    }

    .chat-text-message p {
        display: inline-block;
    }

    .text-message-content {
        text-align: left;
    }

    .text-message-date {
        text-align: right;
    }


</style>
