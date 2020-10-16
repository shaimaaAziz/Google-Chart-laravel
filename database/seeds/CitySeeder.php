<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'غزة',],
            ['name' => 'رفح',],
            ['name' => 'خانيونس',],
            ['name' => 'جباليا',],
            ['name' => 'دير البلح',],
            ]);

        DB::table('hospitals')->insert([
            ['name' => 'مشفى 1', 'city_id'=>1],
            ['name' => 'مشفى 2', 'city_id'=>1],
            ['name' => 'مشفى 3', 'city_id'=>2],
            ['name' => 'مشفى 4', 'city_id'=>1],
            ['name' => 'مشفى 5', 'city_id'=>3],
            ['name' => 'مشفى 6', 'city_id'=>3],
            ['name' => 'مشفى 7', 'city_id'=>1],
            ['name' => 'مشفى 8', 'city_id'=>2],
            ['name' => 'مشفى 9', 'city_id'=>5],
            ['name' => 'مشفى 10','city_id'=>5],
            ['name' => 'مشفى 11','city_id'=>5],
            ['name' => 'مشفى 12','city_id'=>5],
            ['name' => 'مشفى 13','city_id'=>4],
            ['name' => 'مشفى 14','city_id'=>3],
            ['name' => 'مشفى 15','city_id'=>4],
            ['name' => 'مشفى 16','city_id'=>3],
            ['name' => 'مشفى 17','city_id'=>2],
            ['name' => 'مشفى 18', 'city_id'=>1],
            ['name' => 'مشفى 19', 'city_id'=>1],
        ]);
    }
}
