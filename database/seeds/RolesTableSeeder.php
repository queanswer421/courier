<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=2; $i++):
            DB::table('roles')
                ->insert([
                    'name' => $faker->unique()->randomElement(['client', 'employee', 'admin']),
                ]);
        endfor;
    }
}
