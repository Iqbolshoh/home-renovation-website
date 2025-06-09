<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 *
 * This seeder serves as the entry point for seeding the application's database.
 * It orchestrates the execution of other seeders to populate initial data.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with initial data.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolePermissionSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(AboutStudiaSeeder::class);
        $this->call(HowWeWorkSeeder::class);
        $this->call(AdvantageSeeder::class);
        $this->call(TariffSeeder::class);
        $this->call(ConsultationsSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ProjectsSeeder::class);
    }
}