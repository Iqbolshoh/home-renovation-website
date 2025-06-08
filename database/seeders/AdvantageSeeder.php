<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advantage;

class AdvantageSeeder extends Seeder
{
    public function run(): void
    {
        $advantages = [
            'Качественный дизайн-проект',
            'Соблюдение сроков по договору',
            'Подбор материалов и мебели',
            'Реализация проектов под ключ',
        ];

        foreach ($advantages as $title) {
            Advantage::create(['title' => $title]);
        }
    }
}
