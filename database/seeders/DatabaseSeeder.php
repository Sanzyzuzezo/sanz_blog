<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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


        User::create([
            'name' => 'Muhammad Ikhsan',
            'username' => 'sanzy',
            'email' => 'ikhsanbansar314@gmail.com',
            'password' => bcrypt('sanzyzuzezo')
        ]);

        // User::create([
        //     'name' => 'Rasdan Zaini',
        //     'email' => 'stevbeat2000@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi',
        //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi, porro quasi corrupti animi odio recusandae quod adipisci debitis fugiat fugit velit eos! In delectus veniam
        // culpa quod eveniet totam corrupti, repellat aliquid itaque sapiente quam enim, placeat nostrum! Quisquam nesciunt
        // illum quis reprehenderit? Dolorem fugit minus magnam provident facere excepturi at? Laborum eius, provident nobis voluptatibus quasi voluptatum harum pariatur reprehenderit. Sapiente aperiam rerum
        // voluptatum cupiditate quae doloremque, perspiciatis itaque facilis quam deserunt adipisci officiis eos optio ab
        // voluptate dolor laudantium sit iste omnis unde maxime dolorem? Rem obcaecati numquam a animi nam, enim qui soluta, quas magni incidunt ex earum laborum eius nulla voluptas minima modi voluptatem?
        // Corporis ipsum rem sapiente praesentium quae incidunt doloribus est error recusandae ipsa. Ipsum quidem ab officiis
        // ipsam sit earum inventore nulla dicta, at molestias ratione, amet blanditiis eaque ex ea et architecto est veniam",
        //         'category_id' => 1,
        //         'user_id' => 1
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Ke Dua',
        //         'slug' => 'judul-ke-dua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi',
        //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi, porro quasi corrupti animi odio recusandae quod adipisci debitis fugiat fugit velit eos! In delectus veniam
        // culpa quod eveniet totam corrupti, repellat aliquid itaque sapiente quam enim, placeat nostrum! Quisquam nesciunt
        // illum quis reprehenderit? Dolorem fugit minus magnam provident facere excepturi at? Laborum eius, provident nobis voluptatibus quasi voluptatum harum pariatur reprehenderit. Sapiente aperiam rerum
        // voluptatum cupiditate quae doloremque, perspiciatis itaque facilis quam deserunt adipisci officiis eos optio ab
        // voluptate dolor laudantium sit iste omnis unde maxime dolorem? Rem obcaecati numquam a animi nam, enim qui soluta, quas magni incidunt ex earum laborum eius nulla voluptas minima modi voluptatem?
        // Corporis ipsum rem sapiente praesentium quae incidunt doloribus est error recusandae ipsa. Ipsum quidem ab officiis
        // ipsam sit earum inventore nulla dicta, at molestias ratione, amet blanditiis eaque ex ea et architecto est veniam",
        //         'category_id' => 1,
        //         'user_id' => 1
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Ke Tiga',
        //         'slug' => 'judul-ke-tiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi',
        //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi, porro quasi corrupti animi odio recusandae quod adipisci debitis fugiat fugit velit eos! In delectus veniam
        // culpa quod eveniet totam corrupti, repellat aliquid itaque sapiente quam enim, placeat nostrum! Quisquam nesciunt
        // illum quis reprehenderit? Dolorem fugit minus magnam provident facere excepturi at? Laborum eius, provident nobis voluptatibus quasi voluptatum harum pariatur reprehenderit. Sapiente aperiam rerum
        // voluptatum cupiditate quae doloremque, perspiciatis itaque facilis quam deserunt adipisci officiis eos optio ab
        // voluptate dolor laudantium sit iste omnis unde maxime dolorem? Rem obcaecati numquam a animi nam, enim qui soluta, quas magni incidunt ex earum laborum eius nulla voluptas minima modi voluptatem?
        // Corporis ipsum rem sapiente praesentium quae incidunt doloribus est error recusandae ipsa. Ipsum quidem ab officiis
        // ipsam sit earum inventore nulla dicta, at molestias ratione, amet blanditiis eaque ex ea et architecto est veniam",
        //         'category_id' => 2,
        //         'user_id' => 1
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Ke Empat',
        //         'slug' => 'judul-ke-empat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi',
        //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum libero sequi perferendis quam commodi fuga modi, porro quasi corrupti animi odio recusandae quod adipisci debitis fugiat fugit velit eos! In delectus veniam
        // culpa quod eveniet totam corrupti, repellat aliquid itaque sapiente quam enim, placeat nostrum! Quisquam nesciunt
        // illum quis reprehenderit? Dolorem fugit minus magnam provident facere excepturi at? Laborum eius, provident nobis voluptatibus quasi voluptatum harum pariatur reprehenderit. Sapiente aperiam rerum
        // voluptatum cupiditate quae doloremque, perspiciatis itaque facilis quam deserunt adipisci officiis eos optio ab
        // voluptate dolor laudantium sit iste omnis unde maxime dolorem? Rem obcaecati numquam a animi nam, enim qui soluta, quas magni incidunt ex earum laborum eius nulla voluptas minima modi voluptatem?
        // Corporis ipsum rem sapiente praesentium quae incidunt doloribus est error recusandae ipsa. Ipsum quidem ab officiis
        // ipsam sit earum inventore nulla dicta, at molestias ratione, amet blanditiis eaque ex ea et architecto est veniam",
        //         'category_id' => 2,
        //         'user_id' => 2
        //     ]);
    }
}
