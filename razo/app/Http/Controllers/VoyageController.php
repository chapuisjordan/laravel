<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function getAllTravel()
    {
        $travel = DB::table('voyages')->get();

        return view('index', ['voyages' => $travel]);
    }

    public function getOneTravel($id)
    {
        $oneTravel = DB::table('voyages')->where('id', $id)->first();

        return view('show', ['travel' => $oneTravel]);
    }

    public function createVoyage(Request $request)
    {
        $titre = $request->titre;
        $destination = $request->destination;
        $description = $request->description;
        $prix = $request->prix;
        $image = $request->image;
        $data=array('titre'=>$titre,"destination"=>$destination,"description"=>$description,"prix"=>$prix, 'image'=>$image);
        DB::table('voyages')->insert($data);
    }

    public function showTable()
    {
        $travel = DB::table('voyages')->get();
        
        return view('admin.showTableVoyage', ['travels' => $travel]);
    }

    public function delete()
    {
        
    }

}
