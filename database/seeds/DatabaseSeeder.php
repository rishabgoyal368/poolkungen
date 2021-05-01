<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Admin::create([
            'user_name' => 'Kjell',
            'email' => 'admin@kjell.com',
            'security_code' => '123',
            'mobile_number' => '1234567890',
            'profile_image' => 'test',
            'password' => Hash::make('1234'),
            'status' => 'Active',
        ]);
    }
}
