<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'title' => 'Beruang Pergi Memancing'
            ],
            [
                'category' => 2,
                'title' => 'Harry Potter'
            ],
            [
                'category' => 3,
                'title' => 'Value Investing'
            ],
            [
                'category' => 4,
                'title' => 'Boruto'
            ],
            [
                'category' => 5,
                'title' => 'Love in Summer'
            ],
            [
                'category' => 6,
                'title' => 'Avenger'
            ],
            [
                'category' => 7,
                'title' => 'Penunggu malam'
            ],
            [
                'category' => 8,
                'title' => 'Moby Dick'
            ],
            [
                'category' => 9,
                'title' => 'Singa tidur'
            ],
            [
                'category' => 10,
                'title' => 'Blackest Friday'
            ]
        ]);
    }
}
