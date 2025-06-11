<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramBotUser extends Model
{
    protected $fillable = ['chat_id'];
}
