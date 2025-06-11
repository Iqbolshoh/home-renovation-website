<?php

namespace App\Http\Controllers;

use App\Models\Message;
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

        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = "5339820458";

        $url = config('app.url') . "/admin/messages/";

        $text = "📨 <b>Новое сообщение получено!</b>\n\n"
            . "👤 <b>Имя:</b> {$validated['name']}\n"
            . "📱 <b>Номер:</b> {$validated['number']}\n"
            . "📧 <b>Email:</b> {$validated['email']}\n"
            . "📝 <b>Сообщение:</b> {$validated['message']}\n"
            . "🔗 <b>Открыть в панели администратора:</b>\n<a href=\"{$url}\">Перейти к сообщению</a>";

        Http::withOptions(['verify' => false])->post("https://api.telegram.org/bot{$telegramToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'HTML',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Форма успешно отправлена!'
        ], 200);
    }
}
