<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artical2;
class creates extends Controller
{
public function home(){
    $artical2s=artical2::all();
    return view('header',['artical2s'=>$artical2s]);
   //print_r($artical2s);
    
}
public function add(Request $request){
    $this->validate($request,[
        'Email'=>'required',
        'Password'=>'required'
    ]);
   
    $artical2s= new artical2;
    $artical2s->Email=$request->input('Email');
    $artical2s->Password=$request->input('Password');
    $artical2s->save();
    return redirect('/')->with('info','Artical saved');
    // return 'Validation Pass';
    // return 'add';
}
public function update(Request $request,$id){
    $artical2s=artical2::find($id);
    // echo'<pre>';
    // print_r($artical2s);
    // echo'</pre>';
    // exit();
    return view('update',['artical2s'=>$artical2s]);
    return $id;
}
public function edit(Request $request,$id){
    $this->validate($request,[
        'Email'=>'required',
        'Password'=>'required'
    ]);
    $data=array(
        'Email'=>$request->input('Email'),
        'Password'=>$request->input('Password')
    );
    artical2::where('id',$id)
    ->update($data);
    return redirect('/')->with('info','Artical Updated');

    //return $id;
}
public function delete($id){
 artical2::where('id',$id)
 ->delete();
 return redirect('/')->with('info','Artical Deleted');
 //return $id;
}
}