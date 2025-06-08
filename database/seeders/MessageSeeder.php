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
                'name' => 'Ali Rahmon',
                'number' => '+998901112233',
                'email' => 'ali@example.com',
                'message' => 'Салом! Ман мехостам маълумоти бештар гирам.',
                'status' => 'unread',
            ],
            [
                'name' => 'Zarina Karimova',
                'number' => '+998935551122',
                'email' => 'zarina@example.com',
                'message' => 'Лутфан ба ман занг занед, савол дорам.',
                'status' => 'unread',
            ],
            [
                'name' => 'Farid Usmonov',
                'number' => '+998902223344',
                'email' => 'farid@example.com',
                'message' => 'Хоҳиш мекунам пешниҳоди маро баррасӣ кунед.',
                'status' => 'unread',
            ],
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }

        $this->command->info('Messages seeded successfully!');
    }
}
