<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => '山田太郎',
            'email' => 'taro@example.com',
            'password' => 'password',
            'postal_code' => '0000000',
            'address' => '東京都千代田区',
            'phone' => '09012345678',
        ]);

        User::factory()->count(5)->create();
    }
}
