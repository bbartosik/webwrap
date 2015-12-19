<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

          $this->call(Website_Table_Seeder::class);
          $this->call(Logo_Table_Seeder::class);

        Model::reguard();
    }
}
