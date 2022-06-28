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


        \DB::table('albums')->insert((
            [
            ['id' => '01', 'user_id' => '1', 'title' => 'Nandhaka Pieris', 'description' => 'Lorem Ipsum', 'img' => 'img/landscape1.jpeg', 'created_at' => '2015-05-01','featured' => 'true'],
            ['id' => '02', 'user_id' => '1', 'title' => 'New West Calgary', 'description' => 'Lorem Ipsum', 'img' => 'img/landscape2.jpeg', 'created_at' => '2016-05-01','featured' => 'true'],
            ['id' => '03', 'user_id' => '1', 'title' => 'Australian Landscape', 'description' => 'Lorem Ipsum', 'img' => 'img/landscape3.jpeg', 'created_at' => '2015-02-02','featured' => 'true'],
            ['id' => '04', 'user_id' => '1', 'title' => 'Halvergate Marsh', 'description' => 'Lorem Ipsum', 'img' => 'img/landscape4.jpeg', 'created_at' => '2014-02-01','featured' => 'true'],
            ['id' => '05', 'user_id' => '1', 'title' => 'Rikkis Landscape', 'description' => 'Lorem Ipsum', 'img' => 'img/landscape5.jpeg', 'created_at' => '2010-09-01','featured' => 'true'],
            ['id' => '06', 'user_id' => '1', 'title' => 'Kiddi Kristjans Iceland', 'description' => 'Lorem Ipsum', 'img' => 'img/landscape6.jpeg', 'created_at' => '2015-07-21','featured' => 'true']
        ])
    );
}
}
