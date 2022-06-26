<?php

namespace Database\Seeders;

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
        App\User::create([
            'name' => 'A New Hope',
            'phone' => 'A New Hope',
            'email' => 'A New Hope',
            'bio' => 'A New Hope',
            'profile_picture' => 'A New Hope',
        ]);
    }
}
