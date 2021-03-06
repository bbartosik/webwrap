<?php

use Illuminate\Database\Seeder;

class LogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('logos')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'file' => 'http://a1.nyt.com/assets/homepage/20151216-175935/images/foundation/logos/nyt-logo-379x64.svg',
         'name' => 'NY Times',
         'description' => 'One of the leading News Agecncies in the world. Operating from NY.',
       ]);
       DB::table('logos')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'file' => 'https://cdn0.vox-cdn.com/uploads/chorus_asset/file/2932938/verge-logo-full.0.png',
         'name' => 'The Verge',
         'description' => 'Awesome news website providing a vaiety of technology related articles and more.',
       ]);
       DB::table('logos')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'file' => 'http://www.nationalgeographicexpeditions.com/assets/images/4668/master.jpg',
         'name' => 'National Geographic',
         'description' => 'Great website providing a varaity of articles relating to Nature,Ecology and Science',
       ]);
     }
}
