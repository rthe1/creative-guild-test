<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'id' => '1',
            'name' => 'Nick Reynolds',
            'phone' => '5555555555',
            'email' => 'nick.reynolds@domain.co',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => 'img/profile.jpeg',
        ]);
    }
}
