<?php

namespace App\Http\Controllers;

use App\Band;
use App\Album;
use Illuminate\Http\Request;

class BandsController extends Controller
{
	public function __invoke() {
	 	$bands = Band::all();
   		return view('bands', compact('bands'));
    }

    public function show($band_id) {
    	return 'Show Band w/ ID = '.$band_id;
    }

    public function edit($band_id) {
    	$band = Band::find($band_id);
 		return view('editband', compact('band'));
    	//return 'Edit Band w/ ID = '.$band_id;
    }

    public function save(Request $request, $band_id) {
    	$band = Band::find($band_id);

    	$name = $request->input('name');
    	$website = $request->input('website');
    	$still_active = $request->input('still_active');
    	$start_date = $request->input('start_date');

    	$band->name = $name;
    	$band->website = $website;
    	$band->still_active = $still_active;
    	$band->start_date = $start_date;

    	$band->save();

    	return redirect()->action('BandsController');
    }



    public function delete($bandid) {
    	$delete_this_band = Band::find($bandid);
    	$delete_this_band->delete(); //soft delete; for actual delete use 'forceDelete();'

    	return redirect()->action('BandsController');
    }

}
