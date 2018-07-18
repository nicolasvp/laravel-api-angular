<?php

use Illuminate\Database\Seeder;

class LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lines')->insert([
            'name'    => 'Top',
        ]);
        DB::table('lines')->insert([
            'name'    => 'Jungle',
        ]);
        DB::table('lines')->insert([
            'name'    => 'Mid',
        ]);
        DB::table('lines')->insert([
            'name'    => 'Bot',
        ]);                             
    }
}
