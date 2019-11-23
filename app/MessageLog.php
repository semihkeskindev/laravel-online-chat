<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageLog extends Model
{
    protected $table = 'messages';

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
