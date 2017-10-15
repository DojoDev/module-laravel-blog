<?php

namespace DojoDev\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use DojoDev\Blog\Entities\Post;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $post = new Post;

        $post->title="New Post";
        $post->description="New Post at a new Blog";
        $post->save();

        $post = new Post;
        $post->title="About Us";
        $post->description="New Post at a new About Us";
        $post->save();
        
        // $this->call("OthersTableSeeder");
    }
}
