<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ActivitiesTableSeeder::class,
            BookTableSeeder::class,
            CategoriesTableSeeder::class,
            FollowingTableSeeder::class,
            LikeTableSeeder::class,
            ListRequestTable::class,
            PictureTableSeeder::class,
            RequestTableSeeder::class,
            ReviewTableSeeder::class,
        ]);
    }
}
