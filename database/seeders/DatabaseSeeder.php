<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Rezza Prayudha',
            'username' => 'rezzabang',
            'email' => 'rezzabang@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Taufik Gani',
        //     'email' => 'taufikgani@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Rekam Medis',
            'slug' => 'rekam-medis'
        ]);

        Category::create([
            'name' => 'Tips and Trick',
            'slug' => 'tips-trick'
        ]);

        Category::create([
            'name' => 'Random',
            'slug' => 'random'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident. Commodi, eligendi! Sunt alias expedita neque, quod nostrum cum vel perspiciatis quisquam commodi repellendus voluptates asperiores excepturi mollitia fugiat dolores, voluptatem labore eaque perferendis voluptate quae doloribus molestiae. Voluptatem cum sit ea doloribus voluptas saepe inventore id debitis corporis illo deserunt aperiam cupiditate porro, unde qui at nemo voluptate enim suscipit aliquam? Maxime consequuntur nisi, aliquam ducimus soluta quia asperiores, numquam expedita velit alias facilis similique consectetur magnam.',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident. Commodi, eligendi! Sunt alias expedita neque, quod nostrum cum vel perspiciatis quisquam commodi repellendus voluptates asperiores excepturi mollitia fugiat dolores, voluptatem labore eaque perferendis voluptate quae doloribus molestiae. Voluptatem cum sit ea doloribus voluptas saepe inventore id debitis corporis illo deserunt aperiam cupiditate porro, unde qui at nemo voluptate enim suscipit aliquam? Maxime consequuntur nisi, aliquam ducimus soluta quia asperiores, numquam expedita velit alias facilis similique consectetur magnam.',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident. Commodi, eligendi! Sunt alias expedita neque, quod nostrum cum vel perspiciatis quisquam commodi repellendus voluptates asperiores excepturi mollitia fugiat dolores, voluptatem labore eaque perferendis voluptate quae doloribus molestiae. Voluptatem cum sit ea doloribus voluptas saepe inventore id debitis corporis illo deserunt aperiam cupiditate porro, unde qui at nemo voluptate enim suscipit aliquam? Maxime consequuntur nisi, aliquam ducimus soluta quia asperiores, numquam expedita velit alias facilis similique consectetur magnam.',
        //     'category_id' => 2,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum soluta nisi minus perspiciatis inventore quas nemo omnis consequatur iste nostrum ab officia eaque natus facere, possimus, id, delectus veritatis repellat provident. Commodi, eligendi! Sunt alias expedita neque, quod nostrum cum vel perspiciatis quisquam commodi repellendus voluptates asperiores excepturi mollitia fugiat dolores, voluptatem labore eaque perferendis voluptate quae doloribus molestiae. Voluptatem cum sit ea doloribus voluptas saepe inventore id debitis corporis illo deserunt aperiam cupiditate porro, unde qui at nemo voluptate enim suscipit aliquam? Maxime consequuntur nisi, aliquam ducimus soluta quia asperiores, numquam expedita velit alias facilis similique consectetur magnam.',
        //     'category_id' => 2,
        //     'user_id'=> 2
        // ]);

    }
}
