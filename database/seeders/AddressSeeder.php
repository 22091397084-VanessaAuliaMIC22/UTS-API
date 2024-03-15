<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat beberapa contoh data alamat
        Address::create([
            'street' => 'Jl. Ketintang Selatan III',
            'city' => 'Surabaya',
            'province' => 'Jawa Timur',
            'country' => 'Indonesia',
            'postal_code' => '60232',
            'contact_id' => 1, // Sesuaikan dengan contact_id yang valid
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
