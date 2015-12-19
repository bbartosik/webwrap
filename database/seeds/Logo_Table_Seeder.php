<?php

use Illuminate\Database\Seeder;

class Logo_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('logo')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'file' => 'http://a1.nyt.com/assets/homepage/20151216-175935/images/foundation/logos/nyt-logo-379x64.svg',
        'name' => 'NY Times',
        'description' => 'One of the leading News Agecncies in the world. Operating from NY.',
      ]);
      DB::table('logo')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'file' => 'http://theverge.com/v/verge/scripts/../images/logos/text.png',
        'name' => 'The Verge',
        'description' => 'Awesome news website providing a vaiety of technology related articles and more.',
      ]);

      DB::table('logo')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'file' => 'http://logok.org/wp-content/uploads/2014/06/National-Geographic-logo.png',
        'name' => 'National Geographic',
        'description' => 'Great website providing a varaity of articles relating to Nature,Ecology and Science',
      ]);
    }
}
