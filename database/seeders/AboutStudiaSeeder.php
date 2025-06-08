<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutStudia;

class AboutStudiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutStudia::create([
            'title' => 'О студии',
            'subtitle' => 'Дизайн интерьеров и архитектурное проектирование',
            'text_1' => 'Студия дизайна интерьеров и архитектурного проектирования, основанная в 2010 году, 
            предлагает полный спектр услуг по созданию уникальных и функциональных пространств. 
            Наша команда профессионалов с опытом работы в различных областях дизайна и архитектуры 
            готова воплотить в жизнь самые смелые идеи.',
            'text_2' => 'Мы стремимся к тому, чтобы каждый проект был не только красивым, 
            но и удобным для жизни. Наши дизайнеры работают в тесном сотрудничестве с клиентами, 
            чтобы понять их потребности и создать пространство, которое будет отражать их индивидуальность.',
        ]);

        $this->command->info('AboutStudia seeded successfully!');
    }
}
