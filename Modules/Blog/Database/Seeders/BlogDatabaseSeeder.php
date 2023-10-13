<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Blog;

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
        Blog::create([
            'title' => 'Title 1',
            'description' => 'Description 1'
        ]);
        Blog::create([
            'title' => 'Title 2',
            'description' => 'Description 2'
        ]);
        // $this->call("OthersTableSeeder");
    }
}
