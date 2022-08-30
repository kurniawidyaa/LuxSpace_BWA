<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'roles' => 'ADMIN',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password')
        ]);
        User::factory(10)->create();
    }
}
