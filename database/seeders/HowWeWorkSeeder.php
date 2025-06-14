<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HowWeWork;

class HowWeWorkSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'title' => 'ОСТАВЛЯЕТЕ ЗАЯВКУ',
                'value' => 'Вы звоните нам, пишите на почту или оставляете заявку на сайте.',
            ],
            [
                'title' => 'ЗАМЕРЫ И КОНСУЛЬТАЦИЯ',
                'value' => 'Дизайнер бесплатно приезжает к Вам для выполнения обмеров и фотофиксации.',
            ],
            [
                'title' => 'ПОДПИСАНИЕ ДОГОВОРА',
                'value' => 'Вы приезжаете к нам в офис для подписания договора и уточнения всех нюансов.',
            ],
            [
                'title' => 'ПЛАНИРОВОЧНЫЕ РЕШЕНИЯ',
                'value' => 'Разрабатываем 2-3 варианта планировки, исходя из ваших пожеланий.',
            ],
            [
                'title' => 'ВИЗУАЛИЗАЦИЯ ИНТЕРЬЕРА',
                'value' => 'Разрабатываем 3D визуализацию помещений фотореалистичного качества.',
            ],
            [
                'title' => 'ЧЕРТЕЖИ ДЛЯ СТРОИТЕЛЕЙ',
                'value' => 'Разрабатываем полный пакет чертежей для реализации дизайн-проекта интерьера "под ключ".',
            ],
            [
                'title' => 'РЕАЛИЗАЦИЯ ПОД КЛЮЧ',
                'value' => 'Наши мастера с большим опытом помогут Вам воплотить проект в жизнь.',
            ],
            [
                'title' => 'АВТОРСКИЙ НАДЗОР',
                'value' => 'Контроль соблюдения дизайн-проекта интерьера в ходе выполнения работ.',
            ],
        ];

        foreach ($items as $item) {
            HowWeWork::create($item);
        }

        $this->command->info('HowWeWork seeded successfully!');
    }
}
