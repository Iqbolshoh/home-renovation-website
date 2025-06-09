<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Запуск сидера базы данных.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Современная квартира',
                'apartment_info' => '2 комнаты, 1 кухня, 1 ванная',
                'client_solution' => 'Что мы сделали?',
                'text_1' => 'Этот проект воплотил в себе идею простоты и комфорта. Использовались светлые тона, компактная мебель и современные технологии.',
                'text_2' => 'Особое внимание уделялось естественному освещению и зонированию пространства для удобства проживания.',
            ],
            [
                'title' => 'Роскошная вилла',
                'apartment_info' => '4 спальни, 3 ванных, бассейн',
                'client_solution' => 'Что мы сделали?',
                'text_1' => 'Вилла оформлена в тёплых, натуральных цветах с применением дорогих материалов: мрамора, дуба и стекла.',
                'text_2' => 'Вид из каждой комнаты открывается на горы, а вечернее освещение создаёт уютную атмосферу для всей семьи.',
            ],
            [
                'title' => 'Экодом',
                'apartment_info' => '3 комнаты, солнечные панели, сад',
                'client_solution' => 'Что мы сделали?',
                'text_1' => 'Дом построен с использованием энергоэффективных технологий и натуральных материалов: бамбук, глина, дерево.',
                'text_2' => 'В каждой комнате предусмотрена вентиляция с рекуперацией тепла, солнечные панели обеспечивают полную автономность.',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        $projectImages = [
            // Project 1
            ['project_id' => 1, 'image' => 'projects-images/01JX9NG7XFW635ZYCQ08HNG57S.jpg'],
            ['project_id' => 1, 'image' => 'projects-images/01JX9NG7Y979AYT1VJHAGJ7H1A.jpg'],
            ['project_id' => 1, 'image' => 'projects-images/01JX9NG7YD0MGJ3AHKRBMKGVH1.jpg'],
            ['project_id' => 1, 'image' => 'projects-images/01JX9NG7YHDWNB7MCSZ762RZTV.jpg'],
            ['project_id' => 1, 'image' => 'projects-images/01JX9NG7YP98S0S18RQRCC9FJX.jpg'],
            ['project_id' => 1, 'image' => 'projects-images/01JX9NG7YVCZ9FEJH80PGB1NVH.jpg'],

            // Project 2
            ['project_id' => 2, 'image' => 'projects-images/01JX9NG7XFW635ZYCQ08HNG57S.jpg'],
            ['project_id' => 2, 'image' => 'projects-images/01JX9NG7YHDWNB7MCSZ762RZTV.jpg'],
            ['project_id' => 2, 'image' => 'projects-images/01JX9NG7YP98S0S18RQRCC9FJX.jpg'],
            ['project_id' => 2, 'image' => 'projects-images/01JX9NG7YVCZ9FEJH80PGB1NVH.jpg'],
            ['project_id' => 2, 'image' => 'projects-images/01JX9NG7Y979AYT1VJHAGJ7H1A.jpg'],
            ['project_id' => 2, 'image' => 'projects-images/01JX9NG7YD0MGJ3AHKRBMKGVH1.jpg'],

            // Project 3
            ['project_id' => 3, 'image' => 'projects-images/01JX9NG7XFW635ZYCQ08HNG57S.jpg'],
            ['project_id' => 3, 'image' => 'projects-images/01JX9NG7YHDWNB7MCSZ762RZTV.jpg'],
            ['project_id' => 3, 'image' => 'projects-images/01JX9NG7Y979AYT1VJHAGJ7H1A.jpg'],
            ['project_id' => 3, 'image' => 'projects-images/01JX9NG7YD0MGJ3AHKRBMKGVH1.jpg'],
            ['project_id' => 3, 'image' => 'projects-images/01JX9NG7YP98S0S18RQRCC9FJX.jpg'],
            ['project_id' => 3, 'image' => 'projects-images/01JX9NG7YVCZ9FEJH80PGB1NVH.jpg'],
        ];

        foreach ($projectImages as $image) {
            ProjectImage::create($image);
        }

        $this->command->info('✅ Projects and images seeded successfully!');
    }
}
