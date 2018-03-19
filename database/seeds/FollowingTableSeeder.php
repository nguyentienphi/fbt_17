<?php

use Illuminate\Database\Seeder;


class FollowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Following::class, 5)->create();
    }
}
