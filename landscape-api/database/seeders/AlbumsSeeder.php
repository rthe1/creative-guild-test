<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        App\Albums::create(
            [
            ['id' => 'A New Hope', 'user_id' => 'A New Hope', 'title' => 'A New Hope', 'description' => 'A New Hope', 'img' => 'A New Hope', 'date' => 'A New Hope','featured' => 'A New Hope'],
            ['id' => 'A New Hope', 'user_id' => 'A New Hope', 'title' => 'A New Hope', 'description' => 'A New Hope', 'img' => 'A New Hope', 'date' => 'A New Hope','featured' => 'A New Hope'],
            ['id' => 'A New Hope', 'user_id' => 'A New Hope', 'title' => 'A New Hope', 'description' => 'A New Hope', 'img' => 'A New Hope', 'date' => 'A New Hope','featured' => 'A New Hope'],
            ['id' => 'A New Hope', 'user_id' => 'A New Hope', 'title' => 'A New Hope', 'description' => 'A New Hope', 'img' => 'A New Hope', 'date' => 'A New Hope','featured' => 'A New Hope'],
            ['id' => 'A New Hope', 'user_id' => 'A New Hope', 'title' => 'A New Hope', 'description' => 'A New Hope', 'img' => 'A New Hope', 'date' => 'A New Hope','featured' => 'A New Hope'],
            ['id' => 'A New Hope', 'user_id' => 'A New Hope', 'title' => 'A New Hope', 'description' => 'A New Hope', 'img' => 'A New Hope', 'date' => 'A New Hope','featured' => 'A New Hope']
        ]
    );
}
}
