<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LinesSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(ChampionsSeeder::class);

        factory(App\Champion::class,200)->create();
    }
}
