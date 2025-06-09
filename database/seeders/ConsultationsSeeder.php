<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultation;

class ConsultationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consultations = [
            [
                'name' => 'Ivan Ivanov',
                'email' => 'ivan@example.com',
                'phone' => '+7 (999) 123-45-67',
                'status' => 'read',
            ],
            [
                'name' => 'Olga Petrova',
                'email' => 'olga@example.com',
                'phone' => '+7 (999) 234-56-78',
                'status' => 'read',
            ],
            [
                'name' => 'Sergey Smirnov',
                'email' => 'sergey@example.com',
                'phone' => '+7 (999) 345-67-89',
                'status' => 'unread',
            ],
            [
                'name' => 'Anna Sidorova',
                'email' => 'anna@example.com',
                'phone' => '+7 (999) 456-78-90',
                'status' => 'unread',
            ],
            [
                'name' => 'Pavel Kuznetsov',
                'email' => 'pavel@example.com',
                'phone' => '+7 (999) 567-89-01',
                'status' => 'unread',
            ],
        ];

        foreach ($consultations as $consultation) {
            Consultation::create($consultation);
        }

        $this->command->info('Consultations seeded successfully!');
    }
}
