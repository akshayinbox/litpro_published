<?php
 
use Illuminate\Database\Seeder;
 
class BandsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('bands')->delete();
 
        $bands = array(
            ['id' => 1, 'name' => 'Lady Gaga', 'start_date' => new DateTime, 'website' =>  'http://ladygaga.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Lana Del Rey', 'start_date' => new DateTime, 'website' =>  'http://lanadelrey.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Leon Else', 'start_date' => new DateTime, 'website' =>  'http://leonelse.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Katy Perry', 'start_date' => new DateTime, 'website' =>  'http://katyperry.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Metallica', 'start_date' => new DateTime, 'website' =>  'http://metallica.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'The Weeknd', 'start_date' => new DateTime, 'website' =>  'http://theweeknd.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'AC/DC', 'start_date' => new DateTime, 'website' =>  'http://acdc.com/', 'still_active'=>true, 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );
 
        DB::table('bands')->insert($bands);
    }
 
}

?>
