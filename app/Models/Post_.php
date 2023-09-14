<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Muhammad Ikhsan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint perspiciatis eligendi nostrum ex assumenda, earum et, esse quos sapiente, aliquid aliquam consequatur cumque placeat dolorum dolor hic ab dignissimos at ratione! Quidem eum ducimus dicta repudiandae quis soluta ut ex rerum quasi aperiam. Beatae soluta obcaecati quaerat qui modi non pariatur debitis. Repellendus reprehenderit vel debitis nostrum esse aut? Dolores error dolor porro animi accusantium quos voluptates culpa, adipisci laborum impedit natus eligendi odit, ea ab nemo earum mollitia."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Muhammad Ridho",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint perspiciatis eligendi nostrum ex assumenda, earum et, esse quos sapiente, aliquid aliquam consequatur cumque placeat dolorum dolor hic ab dignissimos at ratione! Quidem eum ducimus dicta repudiandae quis soluta ut ex rerum quasi aperiam. Beatae soluta obcaecati quaerat qui modi non pariatur debitis. Repellendus reprehenderit vel debitis nostrum esse aut? Dolores error dolor porro animi accusantium quos voluptates culpa, adipisci laborum impedit natus eligendi odit, ea ab nemo earum mollitia.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium nulla itaque molestiae dolore ipsa, doloribus nemo, commodi asperiores ullam explicabo provident cum, vel aperiam. Numquam delectus in aliquid ratione molestiae, cumque itaque sit aperiam facere, repellendus quam qui natus maiores rerum! Magni ut molestiae at enim delectus, explicabo harum dolore. Iure totam eaque necessitatibus ipsa doloribus, minus repellendus at voluptas ab eligendi. Totam maxime veritatis in cum dolorem! Commodi, quo. Cupiditate natus nobis dolorum vitae nulla expedita exercitationem voluptas dolores, blanditiis suscipit error nam maxime necessitatibus. Nam, tenetur, vero officia earum accusamus repellendus deleniti perferendis quam expedita error ducimus"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
