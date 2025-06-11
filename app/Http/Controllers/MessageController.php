<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\TelegramBotUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20|regex:/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $validated['status'] = 'unread';

        Message::create($validated);

        $botToken = config('services.telegram.bot_token');
        $url = config('app.url') . "/admin/messages/";

        $text = "📨 <b>Новое сообщение получено!</b>\n\n"
            . "👤 <b>Имя:</b> {$validated['name']}\n"
            . "📱 <b>Номер:</b> {$validated['number']}\n"
            . "📧 <b>Email:</b> {$validated['email']}\n"
            . "📝 <b>Сообщение:</b> {$validated['message']}\n"
            . "🔗 <b>Открыть:</b> <a href=\"{$url}\">Перейти к сообщению</a>";

        $adminUsers = TelegramBotUser::pluck('chat_id');
        foreach ($adminUsers as $chatId) {
            Http::withOptions(['verify' => false])->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Форма успешно отправлена! 😊'
        ], 200);
    }
}
