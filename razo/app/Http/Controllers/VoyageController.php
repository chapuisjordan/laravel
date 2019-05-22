<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Kernel;

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

    public function getOneTravelAdmin($id)
    {
        $oneTravel = DB::table('voyages')->where('id', $id)->first();

        return view('admin.show', ['travel' => $oneTravel]);
    }

    public function createVoyage(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'titre' => 'required',
        //     'destination' => 'required',
        //     'description' => 'required',
        //     'prix' => 'required|string',
        //     'image' => 'required'
        // ])->validate();
        
        // dd($validator);die; 
        
        // if($validator->fails()){
        //     return back()->withErrors($validator)->withInput();
        // }else{
   
        // }

        $titre = $request->titre;
        $destination = $request->destination;
        $description = $request->description;
        $prix = $request->prix;
        $image = $request->image;
        $data=array('titre'=>$titre,"destination"=>$destination,"description"=>$description,"prix"=>$prix, 'image'=>$image);
        DB::table('voyages')->insert($data);
        return redirect('/tableVoyages'); 
        
        // if(gettype($request->titre) == 'string'
        // && gettype($request->destination) == 'string' 
        // && gettype($request->description) == 'string' 
        // && gettype($request->prix) == 'double' 
        // && gettype($request->image) == 'string'){
        //     dd('ok');die;
        // }else{
        //     dd('notok');die;
        // }
    }

    public function showTable()
    {
        $travel = DB::table('voyages')->get();
        
        return view('admin.showTableVoyage', ['travels' => $travel]);
    }

    public function deleteOneTravel($id)
    {
        DB::table('voyages')->where('id',$id)->delete();
        $travels = DB::table('voyages')->get();
        return view('admin.showTableVoyage', ['travels' => $travels]);
    }

    public function updateTravel($id)
    {
        $travel = DB::table('voyages')->where('id', $id)->first();
        return view('admin.updateVoyage', ['travel' => $travel]);
    }

    public function updateTravelAction(Request $request, $id)
    {
        $travel = DB::table('voyages')->where('id', $id);
        $travel->update(['titre' => $request->titre]);
        $travel->update(['destination' => $request->destination]);
        $travel->update(['description' => $request->description]);
        $travel->update(['prix' => $request->prix]);
        $travel->update(['image' => $request->image]);

        return redirect('/tableVoyages');
    }
}
