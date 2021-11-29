<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'book_id' => 1,
                'author' => 'Dono',
                'publisher' => 'Erlangga',
                'year' => 2019,
                'description' => 'Ini buku anak-anak tentang Beruang memancing ikan'
            ],
            [
                'book_id' => 2,
                'author' => 'J. K. Rowling',
                'publisher' => 'Erlangga',
                'year' => 1997,
                'description' => 'menceritakan tentang petualangan Harry Potter'
            ],
            [
                'book_id' => 3,
                'author' => 'Benjamin Graham',
                'publisher' => 'Erlangga',
                'year' => 1949,
                'description' => 'buku tentang investasi berdasarkan nilai'
            ],
            [
                'book_id' => 4,
                'author' => 'Masashi Kishimoto',
                'publisher' => 'Erlangga',
                'year' => 2017,
                'description' => 'Menceritakan perjalanan Boruto menjadi ninja'
            ],
            [
                'book_id' => 5,
                'author' => 'Angelina ros',
                'publisher' => 'Agro Media',
                'year' => 2002,
                'description' => 'Menceritakan pertemuan kisah cinta John saat musim panas'
            ],
            [
                'book_id' => 6,
                'author' => 'Stan Lee',
                'publisher' => 'Agro Media',
                'year' => 2003,
                'description' => 'kisah tentang kumpulan superhero bergabung untuk menyelamatkan bumi dari penjahat legendaris'
            ],
            [
                'book_id' => 7,
                'author' => 'Adinda',
                'publisher' => 'Agro Media',
                'year' => 2019,
                'description' => 'menceritakan rumah yang memiliki aura gelap yang selalu tampak seperti ada seseorang pada malam hari'
            ],
            [
                'book_id' => 8,
                'author' => 'Herman Melville',
                'publisher' => 'Agro Media',
                'year' => 1851,
                'description' => 'Bercerita tentang petualangan sang tokoh (bernama Ishmael) dalam mengikuti pelayaran kapal pemburu paus yang dipimpin oleh seorang kapten obsesif bernama Kapten Ahab. Sang kapten hanya memiliki satu kaki akibat kecelakaan di kala memburu seekor paus yang dijulukinya Moby-Dick. Ia sangat bernafsu melampiaskan dendamnya kepada sang hewan hingga tidak peduli akan keselamatan diri maupun anak buahnya. Cerita berakhir dengan tragedi.'
            ],
            [
                'book_id' => 9,
                'author' => 'ASDASD',
                'publisher' => 'Agro Media',
                'year' => 2020,
                'description' => 'cerita singa tertidur'
            ],
            [
                'book_id' => 10,
                'author' => 'HAHAHAA',
                'publisher' => 'Elexmedia Komputindo',
                'year' => 2020,
                'description' => 'menceritakan pembunuhan yang terjadi pada malam jumat thanksgiving'
            ]
        ]);
    }
}
