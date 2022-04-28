<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        

        User::create([
            'name' => 'salam',
            'username' => 'salam',
            'email' => 'salam@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'gaduk',
        //     'email' => 'gaduk@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-rogramming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula nibh sed dolor dignissim, eget accumsan nunc euismod. 
        //                Etiam purus quam, tristique non consequat aliquam, tristique vel augue. Nullam fringilla libero id quam venenatis mattis. Aenean quis erat pharetra, lacinia tortor et, pellentesque sem. Mauris dignissim facilisis neque eget pulvinar. Praesent et ante convallis, convallis lectus nec, maximus turpis. Vivamus sodales blandit erat et tristique. Maecenas ac neque maximus, sollicitudin elit id, tristique nunc.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ',
        //     'body' => '</p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula nibh sed dolor dignissim, eget accumsan nunc euismod. 
        //                Etiam purus quam, tristique non consequat aliquam, tristique vel augue. Nullam fringilla libero id quam venenatis mattis. Aenean quis erat pharetra, lacinia tortor et, pellentesque sem. Mauris dignissim facilisis neque eget pulvinar. Praesent et ante convallis, convallis lectus nec, maximus turpis. Vivamus sodales blandit erat et tristique. Maecenas ac neque maximus, sollicitudin elit id, tristique nunc.<p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula nibh sed dolor dignissim, eget accumsan nunc euismod. 
        //                Etiam purus quam, tristique non consequat aliquam, tristique vel augue. Nullam fringilla libero id quam venenatis mattis. Aenean quis erat pharetra, lacinia tortor et, pellentesque sem. Mauris dignissim facilisis neque eget pulvinar. Praesent et ante convallis, convallis lectus nec, maximus turpis. Vivamus sodales blandit erat et tristique. Maecenas ac neque maximus, sollicitudin elit id, tristique nunc.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula nibh sed dolor dignissim, eget accumsan nunc euismod. 
        //                Etiam purus quam, tristique non consequat aliquam, tristique vel augue. Nullam fringilla libero id quam venenatis mattis. Aenean quis erat pharetra, lacinia tortor et, pellentesque sem. Mauris dignissim facilisis neque eget pulvinar. Praesent et ante convallis, convallis lectus nec, maximus turpis. Vivamus sodales blandit erat et tristique. Maecenas ac neque maximus, sollicitudin elit id, tristique nunc.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
