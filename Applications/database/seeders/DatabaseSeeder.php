<?php

namespace Database\Seeders;

use App\Models\Post;
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
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(30)->create();

    //    User::create([
    //        'name'=>'Evan Leons',
    //      'email'=>'evanleons1309@gmail.com',
    //      'password'=>bcrypt('12345678',)
    //    ]);

//        Post::create([
//            'user_id' => 1,
//            'tittle' => 'Posting Pertama',
//            'slug' => 'posting-pertama',
//            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, suscipit aperiam enim quam id sunt pariatur temporibus ratione numquam rerum nisi unde exercitationem iure accusantium dolorum velit porro officia praesentium.',
//        ]);

//        Post::create([
//            'user_id' => 1,
//            'tittle' => 'Posting Kedua',
//            'slug' => 'posting-kedua',
//            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, suscipit aperiam enim quam id sunt pariatur temporibus ratione numquam rerum nisi unde exercitationem iure accusantium dolorum velit porro officia praesentium.',
//        ]);

//        Post::create([
//            'user_id' => 1,
//            'tittle' => 'Posting Ketiga',
//            'slug' => 'posting-ketiga',
//            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, suscipit aperiam enim quam id sunt pariatur temporibus ratione numquam rerum nisi unde exercitationem iure accusantium dolorum velit porro officia praesentium.',
//        ]);

//        Post::create([
//            'user_id' => 1,
//            'tittle' => 'Posting Keempat',
//            'slug' => 'posting-keempat',
//            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, suscipit aperiam enim quam id sunt pariatur temporibus ratione numquam rerum nisi unde exercitationem iure accusantium dolorum velit porro officia praesentium.',
//        ]);

//        Post::create([
//            'user_id' => 1,
//            'tittle' => 'Posting Kelima',
//            'slug' => 'posting-kelima',
//            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, suscipit aperiam enim quam id sunt pariatur temporibus ratione numquam rerum nisi unde exercitationem iure accusantium dolorum velit porro officia praesentium.',
//        ]);





    }
}
