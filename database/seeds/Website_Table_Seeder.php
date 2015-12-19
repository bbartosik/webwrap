<?php

use Illuminate\Database\Seeder;

class Website_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('websites')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'NY Times',
      'category' => 'News',
      'description' => 'One of the leading News Agecncies in the world. Operating from NY.',
      'site_url' => 'http://http://www.nytimes.com',
      'tiny_url' => 'http://tinyurl.com/133x',
  ]);

      DB::table('websites')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'The Verge',
      'category' => 'Tech News',
      'description' => 'Awesome news website providing a vaiety of technology related articles and more.',
      'site_url' => 'http://www.theverge.com/',
      'tiny_url' => 'http://tinyurl.com/3tw5t9e',
    ]);

      DB::table('websites')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'National Geographic',
      'category' => 'Nature',
      'description' => 'Great website providing a varaity of articles relating to Nature,Ecology and Science',
      'site_url' => 'http://www.nationalgeographic.com/',
      'tiny_url' => 'http://tinyurl.com/6dpw3',
    ]);
    }

}
