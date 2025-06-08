<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tariff;

class TariffSeeder extends Seeder
{
    public function run(): void
    {
        $tariffs = [
            [
                'title' => 'Пакет «‎эскизный»',
                'subtitle' => 'Оптимально для Вас, если вы точно знаете что хотите и Вам не нужна визуализация',
                'price' => 'от 3000 руб./кв.м',
                'description' => 'Обмер+Фото фиксация объекта. Планировочные решения (2 варианта). Художественная концепция в виде коллажей. Чертежи(планы) для строителей. Рекомендации по основным чистовым материалам',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Пакет «‎стандарт»',
                'subtitle' => 'Оптимально для Вас, если вам нужен полный проект с визуализацией и комплектация',
                'price' => 'от 4000 руб./кв.м',
                'description' => 'Полный проект + 3D визуализация + чертежи + подбор мебели и материалов',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Пакет «максимум»',
                'subtitle' => 'Оптимально для Вас, если вам нужно полное сопровождение на протяжении всего ремонта',
                'price' => 'от 5000 руб./кв.м',
                'description' => 'Все услуги из "стандарта" + авторский надзор + сопровождение',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Дополнительные услуги',
                'subtitle' => 'Так же вы можете заказать некоторые услуги отдельно',
                'price' => '2500 руб./кв.м',
                'description' => 'Любые отдельные услуги по запросу: визуализация, надзор, подбор мебели и т.д.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($tariffs as $item) {
            Tariff::create($item);
        }
        $this->command->info('Tariffs seeded successfully!');
    }
}
