<?php

namespace App\Http\Controllers;

use App\MessageLog;
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

        MessageLog::create([
            'user_id' => \Auth::id(),
            'message' => $message,
        ]);

        event(new \App\Events\ChatMessageEvent(\Auth::user()->username,$message));
        return response([],201);
    }

    public function getLatestMessages() {
        $latestMessages = MessageLog::orderBy('created_at','desc')->limit(10)->get();
        return response()->json(['latestMessages' => $latestMessages],'201');
    }
}
