<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'name' => 'Али Рахмон',
                'number' => '+998901112233',
                'email' => 'ali@example.com',
                'message' => 'Здравствуйте! Хотел бы получить больше информации.',
                'status' => 'read',
            ],
            [
                'name' => 'Зарина Каримова',
                'number' => '+998935551122',
                'email' => 'zarina@example.com',
                'message' => 'Пожалуйста, перезвоните мне, у меня есть вопрос.',
                'status' => 'unread',
            ],
            [
                'name' => 'Фарид Усмонов',
                'number' => '+998902223344',
                'email' => 'farid@example.com',
                'message' => 'Прошу рассмотреть моё предложение.',
                'status' => 'unread',
            ],
            [
                'name' => 'Мадина Ахмедова',
                'number' => '+998911223344',
                'email' => 'madina@example.com',
                'message' => 'Добрый день! Интересуюсь вашими услугами.',
                'status' => 'unread',
            ]
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }

        $this->command->info('Messages seeded successfully!');
    }
}
