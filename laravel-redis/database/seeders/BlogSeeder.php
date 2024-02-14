<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'title' => 'Second blog',
            'sub_header' => 'This is the second sub header',
            'content' => 'BLOG_CONTENT'
        ]);
    }
}
