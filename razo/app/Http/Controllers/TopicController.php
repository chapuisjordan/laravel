<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Kernel;

class TopicController extends Controller
{
    public function index()
    {
        $topics = DB::table('topics')->get();
        return view('index', ['topics' => $topics]);
    }

    public function createAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string|max:75',
            'message' => 'required|string',
        ]);
        
        
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }else{
            $titre = $request->titre;
            $message = $request->message;
            $data=array('title'=>$titre, "message"=>$message);
            DB::table('topics')->insert($data);
            return redirect('/'); 
        }
    }

    public function search()
    {

    }

    public function delete($id)
    {
        DB::table('topics')->where('id',$id)->delete();
        $topics = DB::table('topics')->get();
        return view('index', ['topics' => $topics]);
    }

    public function edit($id)
    {
        $topic = DB::table('topics')->where('id', $id)->first();
        return view('edit', ['topic' => $topic]);
    }

    public function update(Request $request, $id)
    {
        $topic = DB::table('topics')->where('id', $id);
        $topic->update(['title' => $request->title]);
        $topic->update(['message' => $request->message]);

        return redirect('/');
    }

}
