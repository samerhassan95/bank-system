<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
// use Database\Factory\Account;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(10)->create();
        User::create([

            'name' => 'samer',

            'email' => 'admin@gmail.com',

            'password' => bcrypt('123456'),

        ]);
    }
}
