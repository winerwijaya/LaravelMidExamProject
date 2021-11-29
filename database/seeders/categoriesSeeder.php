<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category' => 'anak-anak'
            ],
            [
                'category' => 'fiksi'
            ],
            [
                'category' => 'edukasi'
            ],
            [
                'category' => 'komik'
            ],
            [
                'category' => 'novel'
            ],
            [
                'category' => 'aksi'
            ],
            [
                'category' => 'horror'
            ],
            [
                'category' => 'klasik'
            ],
            [
                'category' => 'cerpen'
            ],
            [
                'category' => 'thriller'
            ]
        ]);
    }
}
