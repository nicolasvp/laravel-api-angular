<?php

use Illuminate\Database\Seeder;

class ChampionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('champions')->insert([
            'name'    => 'Darius',
            'type_id' => 2,
            'line_id' => 1
        ]);

        DB::table('champions')->insert([
            'name'    => 'Syndra',
            'type_id' => 3,
            'line_id' => 3
        ]);

        DB::table('champions')->insert([
            'name'    => 'Lee Sin',
            'type_id' => 2,
            'line_id' => 2
        ]);

        DB::table('champions')->insert([
            'name'    => 'Vayne',
            'type_id' => 5,
            'line_id' => 4
        ]);
                                
    }
}
