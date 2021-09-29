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
            'about_me_title' => 'This is awesome title',
            'about_me_body' => '<p>Quisquam ut exercitationem porro nostrum. Quae dolorum nam maiores voluptas quo ex. Alias numquam voluptas blanditiis et id quos quisquam.</p><p>Ut consequatur nesciunt ut voluptatem esse. Adipisci et autem tempora qui. Inventore odit nesciunt voluptatem qui voluptatem ea.</p><p>Hic dolores sunt eveniet vero odio vel voluptate. Est sed molestiae nulla inventore porro molestias esse. Nobis voluptate optio quibusdam sit omnis.</p><p>Veniam doloribus illum consequuntur necessitatibus aliquam aliquam sunt natus. Aut dicta natus magnam neque suscipit voluptatem autem. Minima dolor officiis temporibus odit aliquid aspernatur libero.</p><p>Et dolorem quod nisi est voluptatem praesentium. Aut molestiae quo rerum laborum. Accusamus consequatur vel et possimus similique quia nulla voluptates. Veniam aut adipisci nisi sequi odit odit optio.</p><p>Deserunt et ratione voluptatem tempore reprehenderit et labore. Magni dignissimos sed ut animi aut. Illum voluptates commodi qui enim ut nihil consequatur.</p>',
            'education' => 'Opole',
            'age' => 100,
            'main_job' => 'Civil Engineer',
            'additional_job' => 'Sole trader'
        ]);
    }
}
