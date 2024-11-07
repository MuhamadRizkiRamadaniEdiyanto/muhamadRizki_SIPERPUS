<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Database\Factories\UserFactory;
class userSeeder extends Seeder
{
    public function run()
    {
      
        User::create([
            'username' => 'Admin',
            'name' => 'Rizki',
            'email' => 'rizki@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
    }
}
