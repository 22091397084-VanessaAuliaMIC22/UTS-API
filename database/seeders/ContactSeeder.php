<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat beberapa contoh data kontak
        Contact::create([
            'first_name' => 'Vanessa',
            'last_name' => 'Yudyasmara',
            'email' => 'vanessa@gmail.com',
            'phone' => '1234567890',
            'user_id' => 1, // Sesuaikan dengan user_id yang valid
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
