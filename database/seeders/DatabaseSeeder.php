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
        User::truncate();
        Post::truncate();
        Category::truncate();
        
        $user = \App\Models\User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius enim vitae magna aliquet sagittis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus nec efficitur nibh, ac fringilla dui. Suspendisse a porta turpis. Nulla facilisi. Integer congue in augue at luctus. Aenean efficitur malesuada feugiat. In scelerisque viverra luctus. Vivamus vehicula, tortor et pulvinar porttitor, tortor arcu dignissim erat, sed tristique nisl odio quis eros. Fusce semper turpis ut nunc venenatis, nec aliquet dui tincidunt. Phasellus felis mi, hendrerit et porta sit amet, pharetra at nunc. Cras et vestibulum sem.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius enim vitae magna aliquet sagittis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus nec efficitur nibh, ac fringilla dui. Suspendisse a porta turpis. Nulla facilisi. Integer congue in augue at luctus. Aenean efficitur malesuada feugiat. In scelerisque viverra luctus. Vivamus vehicula, tortor et pulvinar porttitor, tortor arcu dignissim erat, sed tristique nisl odio quis eros. Fusce semper turpis ut nunc venenatis, nec aliquet dui tincidunt. Phasellus felis mi, hendrerit et porta sit amet, pharetra at nunc. Cras et vestibulum sem.</p>'
        ]);
    }
}
