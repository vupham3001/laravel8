<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
<<<<<<< HEAD
=======
use Faker\Factory as Faker;
use database\factories\UserFactory;
>>>>>>> f3270c5 (commit)

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create();
    }
}
