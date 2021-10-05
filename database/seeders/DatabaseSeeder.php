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


        User::factory()->create([
            'username' => 'PiotrMigdal',
            'name' => 'Piotr Migdal',
            'email' => 'p.f.migdal@gmail.com',
            'thumbnail' => 'thumbnails/9JMWOb2vrOC6b8OqieMsqAlwiqgbLFt4eIE6lfhE.jpg',
            'password' => '$2y$10$tJ0YGgUKWuLADJpox/8z3OKq9Ut.T9N5LunYxtSH9FEKy9IXA83Ee',
            'education' => 'Opole',
            'age' => 100,
            'main_job' => 'Civil Engineer',
            'additional_job' => 'Sole trader'
        ]);
        About::factory()->create([
            'user_id' => 11,
            'title' => 'Awesome about',
            'excerpt' => '<p>Fugit tempore quidem ullam debitis ipsam maxime eos. Harum provident aut ipsum et nesciunt nihil aut. Et voluptatum delectus quasi soluta est nam sed vitae.</p><p>Nihil facilis aut sed nobis. Quis tempora aut aspernatur aut. Corporis repudiandae expedita ut saepe aspernatur sed quisquam.</p><p>Vel qui quisquam cum ex. Provident sint eligendi qui asperiores dolorem cumque. Illum quaerat quasi excepturi voluptatem ad. Rem ad culpa ducimus at libero id.</p><p>Nam recusandae iste sit totam provident dolorem aut. Ut ut autem hic dignissimos. In dolorem aut quod.</p>',
            'body' => '<p>Vel iure accusamus adipisci dolores est soluta consequatur. Eius doloribus ullam id voluptatem aliquam asperiores voluptate. Ab qui tenetur aspernatur accusamus nostrum.</p><p>Aut quidem similique soluta et asperiores. Ut voluptatibus eveniet voluptatum qui officia. Illum aspernatur laboriosam est velit aut sed. Consectetur omnis ut omnis temporibus est et voluptate.</p><p>Modi et facere fugiat in. Minus modi sed reiciendis. Natus earum temporibus consequuntur iure nihil quis deserunt. Reprehenderit molestiae fuga dolor tempora.</p><p>Doloremque tempore autem dolorum quos. Recusandae cum commodi tempore occaecati veritatis neque. Sed reiciendis quas est alias. Voluptatum qui saepe voluptate voluptas.</p><p>Non quas eum reiciendis maiores. Velit temporibus dignissimos nihil illo dolores enim. Laboriosam ipsum aspernatur unde consectetur ab totam. Placeat dolorem dicta consectetur ut reprehenderit odio alias.</p><p>Eum enim aperiam dolorem sint. At inventore quaerat doloremque perspiciatis. Provident porro nam aut magni voluptas dolores nihil. Debitis architecto ex molestiae ut quis et quia impedit.</p><p>Perferendis adipisci neque repudiandae. Ipsa dolore molestias facilis ut quam omnis amet. Quo temporibus neque sit reprehenderit.</p><p>Beatae eius fugiat ut ad dignissimos. Officiis dolore architecto consequatur et beatae vel. Quia cumque odio et ullam esse aut suscipit. Neque harum beatae quia officiis delectus sit.</p>'
        ]);
        About::factory()->create([
            'user_id' => 11,
            'title' => 'Even better about',
            'excerpt' => '<p>Fugit tempore quidem ullam debitis ipsam maxime eos. Harum provident aut ipsum et nesciunt nihil aut. Et voluptatum delectus quasi soluta est nam sed vitae.</p><p>Nihil facilis aut sed nobis. Quis tempora aut aspernatur aut. Corporis repudiandae expedita ut saepe aspernatur sed quisquam.</p><p>Vel qui quisquam cum ex. Provident sint eligendi qui asperiores dolorem cumque. Illum quaerat quasi excepturi voluptatem ad. Rem ad culpa ducimus at libero id.</p><p>Nam recusandae iste sit totam provident dolorem aut. Ut ut autem hic dignissimos. In dolorem aut quod.</p>',
            'body' => '<p>Vel iure accusamus adipisci dolores est soluta consequatur. Eius doloribus ullam id voluptatem aliquam asperiores voluptate. Ab qui tenetur aspernatur accusamus nostrum.</p><p>Aut quidem similique soluta et asperiores. Ut voluptatibus eveniet voluptatum qui officia. Illum aspernatur laboriosam est velit aut sed. Consectetur omnis ut omnis temporibus est et voluptate.</p><p>Modi et facere fugiat in. Minus modi sed reiciendis. Natus earum temporibus consequuntur iure nihil quis deserunt. Reprehenderit molestiae fuga dolor tempora.</p><p>Doloremque tempore autem dolorum quos. Recusandae cum commodi tempore occaecati veritatis neque. Sed reiciendis quas est alias. Voluptatum qui saepe voluptate voluptas.</p><p>Non quas eum reiciendis maiores. Velit temporibus dignissimos nihil illo dolores enim. Laboriosam ipsum aspernatur unde consectetur ab totam. Placeat dolorem dicta consectetur ut reprehenderit odio alias.</p><p>Eum enim aperiam dolorem sint. At inventore quaerat doloremque perspiciatis. Provident porro nam aut magni voluptas dolores nihil. Debitis architecto ex molestiae ut quis et quia impedit.</p><p>Perferendis adipisci neque repudiandae. Ipsa dolore molestias facilis ut quam omnis amet. Quo temporibus neque sit reprehenderit.</p><p>Beatae eius fugiat ut ad dignissimos. Officiis dolore architecto consequatur et beatae vel. Quia cumque odio et ullam esse aut suscipit. Neque harum beatae quia officiis delectus sit.</p>'
        ]);
    }
}
