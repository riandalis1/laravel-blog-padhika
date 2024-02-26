<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Riandalis Purnama Deva',
            'username' => 'riandalis',
            'email' => 'riandalis4@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Wahit bagus Bayunara',
        //     'email' => 'bagus@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut magni consequuntur, iste consequatur nobis maiores, hic dolorum vero nulla ducimus debitis quos asperiores explicabo voluptas, animi cumque quaerat quasi! Dignissimos, id placeat. Saepe necessitatibus dolores eos, quam animi eligendi dignissimos impedit, blanditiis vitae deleniti numquam eveniet sed possimus distinctio ex unde dolor veritatis molestiae. Commodi cupiditate, ipsa adipisci eius, odio, quod sunt id necessitatibus dolorem eveniet vitae ex iste asperiores odit quaerat officia accusantium excepturi a reiciendis fugit? Esse recusandae odio facilis, neque, odit architecto incidunt repellat dicta velit corrupti beatae quod corporis nesciunt at obcaecati adipisci aliquam. Blanditiis, suscipit?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut magni consequuntur, iste consequatur nobis maiores, hic dolorum vero nulla ducimus debitis quos asperiores explicabo voluptas, animi cumque quaerat quasi! Dignissimos, id placeat. Saepe necessitatibus dolores eos, quam animi eligendi dignissimos impedit, blanditiis vitae deleniti numquam eveniet sed possimus distinctio ex unde dolor veritatis molestiae. Commodi cupiditate, ipsa adipisci eius, odio, quod sunt id necessitatibus dolorem eveniet vitae ex iste asperiores odit quaerat officia accusantium excepturi a reiciendis fugit? Esse recusandae odio facilis, neque, odit architecto incidunt repellat dicta velit corrupti beatae quod corporis nesciunt at obcaecati adipisci aliquam. Blanditiis, suscipit?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut magni consequuntur, iste consequatur nobis maiores, hic dolorum vero nulla ducimus debitis quos asperiores explicabo voluptas, animi cumque quaerat quasi! Dignissimos, id placeat. Saepe necessitatibus dolores eos, quam animi eligendi dignissimos impedit, blanditiis vitae deleniti numquam eveniet sed possimus distinctio ex unde dolor veritatis molestiae. Commodi cupiditate, ipsa adipisci eius, odio, quod sunt id necessitatibus dolorem eveniet vitae ex iste asperiores odit quaerat officia accusantium excepturi a reiciendis fugit? Esse recusandae odio facilis, neque, odit architecto incidunt repellat dicta velit corrupti beatae quod corporis nesciunt at obcaecati adipisci aliquam. Blanditiis, suscipit?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
