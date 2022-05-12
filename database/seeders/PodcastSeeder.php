<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Podcast::factory(10)->create();
    }
}
