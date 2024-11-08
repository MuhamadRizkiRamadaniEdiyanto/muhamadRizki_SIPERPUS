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
      
        // User::create([
        //     'username' => 'Admin',
        //     'name' => 'Rizki',
        //     'email' => 'rizki@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => now(),
        // ]);

     $pustakawan = User::create([
        'name' => 'Pustakawan',
        'email' => 'pustakawan@unsur.ac.id',
        'password' => Hash::make('admin123')
     ]);
     
     $pustakawan->assignRole('pustakawan');
     $pustakawan->givePermissionTo('kelola_buku');
     $pustakawan->givePermissionTo('kelola_peminjaman');
     $pustakawan->givePermissionTo('kelola_pengembalian');

     $mahasiswa = User::create([
        'name' => 'Mahasiswa',
        'email' => 'mahasiswa@unsur.ac.id',
        'password' => Hash::make('admin123')
     ]);
     
    }
}
