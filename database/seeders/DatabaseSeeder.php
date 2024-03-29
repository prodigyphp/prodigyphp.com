<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\Type;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        if (App::environment('local')) {
            $user = User::factory()->create([
                'name' => 'Stephen Bateman',
                'email' => 'stephen@bate-man.com',
                'password' => Hash::make('jjjjjjjj'),
            ]);
        }

        $page = Page::factory()->create([
            'title' => 'How it works',
            'slug' => 'how-it-works',
        ]);

        $page->children()->create([
            'key' => 'blocks.headers.header',
            'content' => collect(['title' => 'What is the answer to life?', 'subtitle' => '42'])
        ]);

//        $row = $page->blocks()->create([
//            'key' => 'prodigy::blocks.basic.row'
//        ]);
//
//        Block::create([
//           'key' => 'prodigy::blocks.basic.text',
//           'content' => collect(['text' => 'So this is interesting.'])
//        ]);
//
//        Block::create([
//           'key' => 'prodigy::blocks.basic.text',
//           'content' => collect(['text' => 'and in multiple columns!'])
//        ]);


    }

}
