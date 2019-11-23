<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageLog extends Model
{
    protected $table = 'messages_logs';

    protected $guarded = [];

    public function user() {
        return $this->hasMany(User::class);
    }
}
