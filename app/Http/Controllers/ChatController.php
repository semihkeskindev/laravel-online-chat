<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Mockery\Exception;

class ChatController extends Controller
{
    public function send(Request $request) {
        if (!$request->isMethod('post')) {
            return new Exception('Post Methodu Değil');
        }
        $message = $request->post('message');
        if (empty($message)) {
            return new Exception('Mesaj Boş Bırakılamaz');
        }

        $dt = new DateTime();
        event(new \App\Events\ChatMessageEvent(\Auth::user()->username,$message, $dt->format('H:i')));
    }
}
