<?php

use Illuminate\Database\Seeder;


class PictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Picture::class, 5)->create();
    }
}
