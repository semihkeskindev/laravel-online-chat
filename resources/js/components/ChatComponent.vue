<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Basic Chat</h1></div>

                    <hr>
                    <form id="send-chat">
                        <input type="text" name="chat-input" autocomplete="off">
                        <button class="btn btn-outline-primary">Send</button>
                    </form>
                    <div class="chat-reader">
                        <div class="chat-reader-title"><h2>Chat</h2></div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    $(document).on('submit', 'form#send-chat', function (e) {
        $(this).attr('onsubmit', 'return false;');
        e.preventDefault();
        var chatMessage = $('input[name=chat-input]').val();
        if (chatMessage === '') {
            console.log('Chat Boş Bırakılamaz.');
            return false;
        }
        callEvent(chatMessage);
    });
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        methods: {

        }
    }
</script>

<style scoped>

    h1 { color: #111; font-family: 'Helvetica Neue', sans-serif;margin:0;}
    h2 { color: #111; font-family: 'Open Sans', sans-serif;margin:0;}
    p { color: #685206; font-family: "Trebuchet MS", Helvetica, sans-serif;}
    .chat-reader {
        border: 1px solid lightgray;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.42);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.42);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.42);
        margin: 10px 0;
        padding: 5px;
    }

    input {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        display: block;
        width: 100%;
        padding: 7px;
        border: none;
        border-bottom: 1px solid #ddd;
        background: transparent;
        margin-bottom: 10px;
        font: 16px Arial, Helvetica, sans-serif;
        height: 45px;
    }
</style>