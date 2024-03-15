<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'vanessa_yudyasmara',
            'password' => bcrypt('rahasia'),
            'name' => 'Vanessa Yudyasmara',
        ]);

        // Tambahkan pengguna lain jika diperlukan
        // User::create([...]);
    }
}