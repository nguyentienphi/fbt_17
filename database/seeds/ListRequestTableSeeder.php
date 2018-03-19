<?php

use Illuminate\Database\Seeder;


class ListRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ListRequest::class, 5)->create();
    }
}
