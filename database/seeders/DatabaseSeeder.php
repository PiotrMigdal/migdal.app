<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        About::factory(10)->create();

        $user = User::factory()->create([
            'username' => 'PiotrMigdal',
            'name' => 'Piotr Migdal',
            'email' => 'p.f.migdal@gmail.com',
            'password' => '$2y$10$tJ0YGgUKWuLADJpox/8z3OKq9Ut.T9N5LunYxtSH9FEKy9IXA83Ee',
            'education' => 'Opole',
            'age' => 100,
            'main_job' => 'Civil Engineer',
            'additional_job' => 'Sole trader'
        ]);
    }
}
