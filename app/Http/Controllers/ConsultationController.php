<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\TelegramBotUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsultationController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $validated['status'] = 'unread';

        Consultation::create($validated);

        $botToken = config('services.telegram.bot_token');
        $url = config('app.url') . "/admin/consultations/";

        $text = "📥 <b>Новая заявка на консультацию!</b>\n\n"
            . "👤 <b>Имя:</b> {$validated['name']}\n"
            . "📧 <b>Email:</b> {$validated['email']}\n"
            . "📱 <b>Телефон:</b> {$validated['phone']}\n\n"
            . "🔗 <b>Открыть заявку:</b> <a href=\"{$url}\">Смотреть в админке</a>";

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
            'message' => 'Form submitted successfully'
        ]);
    }
}
