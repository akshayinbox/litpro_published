<?php

namespace App\Http\Controllers;

use App\Album;
use App\Band;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
	public function __invoke() {
		$albums = Album::all();
		$bands = Band::all();
   		return view('albums')->with('bands', $bands)->with('albums', $albums);
    }

    public function edit($albumid) {
    	$album = Album::find($albumid);
    	$band = Band::find($album->band_id);
        $bands = Band::all();

    	return view('editalbum')->with('album', $album)->with('band', $band)->with('bands',$bands);
    }

    public function delete($albumid) {
    	$delete_this_album = Album::find($albumid);
    	$delete_this_album->delete();

    	return redirect()->action('AlbumsController');
    }

    public function save(Request $request, $albumid) {
    	$album = Album::find($albumid);

    	$album->name = $request->name;
        $album->band_id = $request->band;
    	$album->recorded_date = $request->recorded_date;
    	$album->release_date = $request->release_date;
    	$album->number_of_tracks = $request->number_of_tracks;
    	$album->label = $request->label;
    	$album->producer = $request->producer;
    	$album->genre = $request->genre;

    	$album->save();

    	return redirect()->action('AlbumsController');

    }

    /*
    * Album(s) by band (id)
    */
    public function by($bandid) {
    	if($bandid == "") {
    		$albums = Album::all();
			$bands = Band::all();
   			return view('albums')->with('bands', $bands)->with('albums', $albums);
    	} else {
    		$albums = Band::find($bandid)->albums;
    		$bands = Band::all();
   			return view('albums')->with('bands', $bands)->with('albums', $albums)->with('bandid', $bandid);
    	}
    }
}
