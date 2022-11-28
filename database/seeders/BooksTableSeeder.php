<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksTableSeeder extends Seeder
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
                'title' => 'Dunia Sophie',
                'author' => 'Jostein Gaarder',
                'year' => '2019',
                'synopsis' => 'Sophie, seorang pelajar sekolah menengah berusia empat belas tahun. Suatu hari sepulang sekolah, dia mendapat sebuah surat misterius yang hanya berisikan satu pertanyaan: Siapa kamu?',
                'image' => 'https://inc.mizanstore.com/aassets/img/com_cart/produk/covUD-214.jpg'
            ],
            [
                'title' => 'My First Encyclopedia',
                'author' => 'Disney',
                'year' => '2017',
                'synopsis' => 'Dunia kita penuh dengan fakta menakjubkan
                yang tak mungkin kaupelajari dalam sehari.',
                'image' => 'https://cdnwpseller.gramedia.net/wp-content/uploads/2021/01/29145234/Ensiklopedia-Anak-Pintar-My-First-Encyclopedia.jpg'
            ],
            [
                'title' => 'Fire&Blood',
                'author' => 'Geore R.R. Martin',
                'year' => '2020',
                'synopsis' => '"Fire and Blood" begins with Aegon I conquest of Westeros after he leads his family out of Essos.',
                'image' => 'https://images-na.ssl-images-amazon.com/images/W/WEBP_402378-T2/images/I/41Eq1ijtvoL.jpg'
            ]


        ]);
    }
}
