<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'kode' => 'MS001',
                'nama' => 'Toyota Supra',
                'harga' => 900000000,
                'deskripsi' => 'Mobil sport bertenaga dengan desain aerodinamis. Dilengkapi dengan mesin turbocharged yang kuat.',
                'image_url' => 'https://example.com/toyota_supra.jpg',
                'satuan_id' => 1,

            ],
            [
                'kode' => 'MS002',
                'nama' => 'Ferrari 488 GTB',
                'harga' => 2000000000,
                'deskripsi' => 'Mobil supercar dengan performa luar biasa. Ditenagai oleh mesin V8 yang menghasilkan suara menggema yang memukau.',
                'image_url' => 'https://example.com/ferrari_488_gtb.jpg',
                'satuan_id' => 1,

            ],
        ]);
    }
}
