<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('publishers')->insert([
            [
                'name' => 'Mizan Publishing',
                'email' => 'mzn@mizan.com',
                'phone' => '021-45685994',
                'address' => 'Jl. Jakarta Selatan',
                'image' => 'https://images.glints.com/unsafe/180x0/glints-dashboard.s3.amazonaws.com/company-logo/81a14f6365b655e5e5379eb468a92ced.jpg'
            ],
            [
                'name' => 'Gramedia',
                'email' => 'gramed@gramedia.com',
                'phone' => '021-226787899',
                'address' => 'Jl. Palmerah',
                'image' => 'https://pbs.twimg.com/media/CEtdkknVAAAyd1L.png:large'
            ],
            [
                'name' => 'Simon & Schuster',
                'email' => 'simonschuster@ss.com',
                'phone' => '98723849',
                'address' => 'New York rd.',
                'image' => 'https://d1dyndsnc54cq8.cloudfront.net/assets/sns-large-logo.png'
            ]

        ]);
    }
}
