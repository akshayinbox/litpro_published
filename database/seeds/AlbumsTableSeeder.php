<?php
 
use Illuminate\Database\Seeder;
 
class AlbumsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('albums')->delete();
 
        $albums = array(
            ['id' => 1, 'name' => 'Ultraviolence', 'band_id'=>2 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>12, 'label'=>'Polydor Ltd. (UK)', 'producer'=>'Lana Del Rey', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Honeymoon', 'band_id'=>2 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>14, 'label'=>'Polydor Ltd. (UK)', 'producer'=>'Lana Del Rey', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'ARTPOP', 'band_id'=>1 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>15, 'label'=>'INTERSCOPE', 'producer'=>'Haus of Gaga', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Black Car', 'band_id'=>3 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>1, 'label'=>'INTERSCOPE', 'producer'=>'Leon Else', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Kill \'Em All', 'band_id'=>5 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>10, 'label'=>'Megaforce Records', 'producer'=>'Metallica et. al.', 'genre'=>'Rock/Metal',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Death Magnetic', 'band_id'=>5 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>12, 'label'=>'Megaforce Records', 'producer'=>'Metallica et. al.', 'genre'=>'Rock/Metal',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'One of The Boys', 'band_id'=>4 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>15, 'label'=>'Interscope Records', 'producer'=>'Katy Perry et. al.', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'Teenage Dream', 'band_id'=>4 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>17, 'label'=>'Interscope Records', 'producer'=>'Katy Perry et. al.', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'Beauty Behind the Madness', 'band_id'=>6 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>12, 'label'=>'Megaforce Records', 'producer'=>'The Weeknd & Co.', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'Starboy', 'band_id'=>6 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>12, 'label'=>'Interscope Records', 'producer'=>'The Weeknd & Co.', 'genre'=>'Pop',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'Black Ice', 'band_id'=>7 , 'recorded_date' => new DateTime, 'release_date' => new DateTime, 'number_of_tracks'=>17, 'label'=>'Interscope Records', 'producer'=>'Black Ice Folks Inc.', 'genre'=>'Hard Rock/Blues',  'created_at' => new DateTime, 'updated_at' => new DateTime],






        );
 
        DB::table('albums')->insert($albums);
    }
 
}

?>