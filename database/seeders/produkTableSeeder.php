<?php
namespace Database\Seeders;

use	Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class	ProdukTableSeeder	extends	Seeder
{
public	function	run()
				{
DB::table('produk')->insert([
    ['nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => '2000', 'harga_beli' => '3000'],
    ['nama_produk' => 'Shampoo Sunsilk', 'harga_jual' => '4000','harga_beli' => '5000']
    ]);
    }
}