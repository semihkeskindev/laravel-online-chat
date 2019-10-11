<?php

namespace App\Http\Controllers;

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

        event(new \App\Events\ChatMessageEvent('Anonymous',$message));
    }
}
