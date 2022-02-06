<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy = Factory::create('id_ID');
        $categories = ['Pakaian', 'Gadget', 'Digital'];
        $title = [
            'Pakaian' => [
                'material' => ['Kaos', 'Kemeja', 'Celana', 'Jas'],
                'jenis' => ['Besar', 'Kecil', 'Anak', 'Laki-laki', 'Perempuan'],
                'warna' => ['putih', 'hitam', 'merah', 'biru', 'kuning', 'pink', 'ungu']
            ],
            'Gadget' => [
                'material' => ['HP', 'Laptop', 'PC', 'Tablet'],
                'jenis' => ['Samsung', 'Xiaomi', 'Vivo', 'Oppo', 'Iphone'],
                'warna' => ['putih', 'hitam', 'merah', 'biru', 'kuning', 'pink', 'ungu']
            ],
            'Digital' => [
                'material' => ['Pulsa', 'Kuota', 'Perdana', 'E-money'],
                'jenis' => ['Telkomsel', 'Indosat', 'Smartfren', 'XL', 'Gopay', 'Shopeepay'],
                'warna' => ['5', '10', '25', '50', '100']
            ]
        ];
        for ($i = 0; $i < 50; $i++) {
            $category = $dummy->randomElement($categories);
            $titleStr = $dummy->randomElement($title[$category]['material']);
            $titleStr .= ' ' . $dummy->randomElement($title[$category]['jenis']);
            $titleStr .= ' ' . $dummy->randomElement($title[$category]['warna']);
            $data[] = [
                'category' => $category,
                'title' => $titleStr,
                'price' => $dummy->numberBetween(1, 100) * 100,
                'description' => $dummy->text(),
                'stock' => $dummy->numberBetween(1, 200),
                'free_shipping' => $dummy->numberBetween(0, 1),
                'rate' => $dummy->randomFloat(2, 1, 5),
            ];
        }
        (new Product())->insert($data);
    }
}
