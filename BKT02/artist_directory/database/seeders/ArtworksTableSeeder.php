<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Artwork;


class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i <10; $i++) {
            Artwork::create([
                'artist_name' => $faker->name,
                'description' => $faker->text,
                'art_type' => $faker->randomElement(['paint', 'music', 'literary']),
                'media_link' => $faker->url,
                'cover_image' => $faker->imageUrl(),
            ]);
        }

        
    }
}
