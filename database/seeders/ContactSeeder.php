<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $socials = [
            ['name' => 'Phone', 'icon' => 'fas fa-phone', 'url' => 'tel:', 'value' => '+998901234567', 'is_active' => true],
            ['name' => 'Phone', 'icon' => 'fas fa-phone', 'url' => 'tel:', 'value' => '+998909876543', 'is_active' => true],
            ['name' => 'Email', 'icon' => 'fas fa-envelope', 'url' => 'mailto:', 'value' => 'iqbolshoh@example.com', 'is_active' => true],
            ['name' => 'Email', 'icon' => 'fas fa-envelope', 'url' => 'mailto:', 'value' => 'info@iqbolshoh.com', 'is_active' => true],
            ['name' => 'Address', 'icon' => 'fas fa-map-marker-alt', 'url' => null, 'value' => 'Samarkand, Uzbekistan', 'is_active' => true],
            ['name' => 'Telegram', 'icon' => 'fab fa-telegram', 'url' => 'https://t.me/', 'value' => 'iqbolshoh', 'is_active' => true],
            ['name' => 'Instagram', 'icon' => 'fab fa-instagram', 'url' => 'https://www.instagram.com/', 'value' => 'iqbolshoh', 'is_active' => true],
            ['name' => 'Facebook', 'icon' => 'fab fa-facebook', 'url' => 'https://www.facebook.com/', 'value' => 'iqbolshoh', 'is_active' => true],
            ['name' => 'X (Twitter)', 'icon' => 'fab fa-x-twitter', 'url' => 'https://x.com/', 'value' => 'iqbolshoh', 'is_active' => true],
            ['name' => 'WhatsApp', 'icon' => 'fab fa-whatsapp', 'url' => 'https://wa.me/', 'value' => null, 'is_active' => false],
            ['name' => 'LinkedIn', 'icon' => 'fab fa-linkedin', 'url' => 'https://www.linkedin.com/', 'value' => null, 'is_active' => false],
            ['name' => 'YouTube', 'icon' => 'fab fa-youtube', 'url' => 'https://youtube.com/', 'value' => null, 'is_active' => false],
            ['name' => 'TikTok', 'icon' => 'fab fa-tiktok', 'url' => 'https://www.tiktok.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Snapchat', 'icon' => 'fab fa-snapchat', 'url' => 'https://www.snapchat.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Pinterest', 'icon' => 'fab fa-pinterest', 'url' => 'https://www.pinterest.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Reddit', 'icon' => 'fab fa-reddit', 'url' => 'https://www.reddit.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Tumblr', 'icon' => 'fab fa-tumblr', 'url' => 'https://www.tumblr.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Viber', 'icon' => 'fab fa-viber', 'url' => 'https://www.viber.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Discord', 'icon' => 'fab fa-discord', 'url' => 'https://discord.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Flickr', 'icon' => 'fab fa-flickr', 'url' => 'https://www.flickr.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Medium', 'icon' => 'fab fa-medium', 'url' => 'https://medium.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Twitch', 'icon' => 'fab fa-twitch', 'url' => 'https://www.twitch.tv/', 'value' => null, 'is_active' => false],
            ['name' => 'Quora', 'icon' => 'fab fa-quora', 'url' => 'https://www.quora.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Slack', 'icon' => 'fab fa-slack', 'url' => 'https://slack.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Clubhouse', 'icon' => 'fas fa-microphone', 'url' => 'https://www.joinclubhouse.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Odnoklassniki', 'icon' => 'fab fa-odnoklassniki', 'url' => 'https://ok.ru/', 'value' => null, 'is_active' => false],
            ['name' => 'VKontakte', 'icon' => 'fab fa-vk', 'url' => 'https://vk.com/', 'value' => null, 'is_active' => false],
            ['name' => 'Mail.ru', 'icon' => 'fas fa-envelope', 'url' => 'https://mail.ru/', 'value' => null, 'is_active' => false],
        ];

        foreach ($socials as $social) {
            Contact::create([
                'name' => $social['name'],
                'icon' => $social['icon'],
                'url' => $social['url'],
                'value' => $social['value'],
                'is_active' => $social['is_active'],
            ]);
        }

        $this->command->info('Contacts seeded successfully!');
    }
}
