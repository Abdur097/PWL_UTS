<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            ['kode_barang' => 'PRD001', 'nama_barang' => 'Chicken Fillet', 'kateogori_barang' => 'makanan','harga' => '18000','qty' => '50',],
            ['kode_barang' => 'PRD002', 'nama_barang' => 'Teh Javana', 'kateogori_barang' => 'minuman','harga' => '3000','qty' => '50',],
            ['kode_barang' => 'PRD003', 'nama_barang' => 'Miami', 'kateogori_barang' => 'saos','harga' => '2000','qty' => '30',],
            ['kode_barang' => 'PRD004', 'nama_barang' => 'Sosis Goreng', 'kateogori_barang' => 'makanan','harga' => '14000','qty' => '40',],
            ['kode_barang' => 'PRD005', 'nama_barang' => 'Teh Pucuk', 'kateogori_barang' => 'minuman','harga' => '3000','qty' => '50',],
            ['kode_barang' => 'PRD006', 'nama_barang' => 'Basreng', 'kateogori_barang' => 'makanan','harga' => '16000','qty' => '50',],
            ['kode_barang' => 'PRD007', 'nama_barang' => 'Fanta', 'kateogori_barang' => 'minuman','harga' => '5000','qty' => '40',],
            ['kode_barang' => 'PRD008', 'nama_barang' => 'Cheese', 'kateogori_barang' => 'saos','harga' => '2000','qty' => '30',],
            ['kode_barang' => 'PRD009', 'nama_barang' => 'Jamur Enoki', 'kateogori_barang' => 'makanan','harga' => '14000','qty' => '30',],
            ['kode_barang' => 'PRD010', 'nama_barang' => 'Teh Botol', 'kateogori_barang' => 'minuman','harga' => '3000','qty' => '50',],
            ['kode_barang' => 'PRD011', 'nama_barang' => 'Tomato', 'kateogori_barang' => 'saos','harga' => '2000','qty' => '30',],
            ['kode_barang' => 'PRD012', 'nama_barang' => 'Kulit Krispi', 'kateogori_barang' => 'makanan','harga' => '15000','qty' => '50',],
            ['kode_barang' => 'PRD013', 'nama_barang' => 'Sprit', 'kateogori_barang' => 'minuman','harga' => '5000','qty' => '40',],
            ['kode_barang' => 'PRD014', 'nama_barang' => 'Dori Fillet', 'kateogori_barang' => 'makanan','harga' => '20000','qty' => '20',],
            ['kode_barang' => 'PRD015', 'nama_barang' => 'Teh Kotak', 'kateogori_barang' => 'minuman','harga' => '3000','qty' => '40',],
            ['kode_barang' => 'PRD016', 'nama_barang' => 'Tahu Krispi', 'kateogori_barang' => 'makanan','harga' => '14000','qty' => '50',],
            ['kode_barang' => 'PRD017', 'nama_barang' => 'Mayo', 'kateogori_barang' => 'saos','harga' => '2000','qty' => '30',],
            ['kode_barang' => 'PRD018', 'nama_barang' => 'Jamur Krispi', 'kateogori_barang' => 'makanan','harga' => '14000','qty' => '30',],
            ['kode_barang' => 'PRD019', 'nama_barang' => 'Aqua Botol', 'kateogori_barang' => 'minuman','harga' => '3000','qty' => '50',],
            ['kode_barang' => 'PRD020', 'nama_barang' => 'Salsa', 'kateogori_barang' => 'saos','harga' => '2000','qty' => '30',],
        ]);
    }
}
