<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name'    => 'Tank',
        ]);
        DB::table('types')->insert([
            'name'    => 'Fighter',
        ]);
        DB::table('types')->insert([
            'name'    => 'Mage',
        ]);
        DB::table('types')->insert([
            'name'    => 'Slayer',
        ]); 
        DB::table('types')->insert([
            'name'    => 'Marksman',
        ]);
        DB::table('types')->insert([
            'name'    => 'Controller',
        ]);
        DB::table('types')->insert([
            'name'    => 'Specialist',
        ]); 
    }
}
