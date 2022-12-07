<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //
    public function store(Request $req){
        $req->validate([
            'title'=>'required| min:5',
            'description'=>'required|min:10'
        ]);
        DB::table('cruds')->insert([
            'title' => $req->title, 
            'description' => $req->description
        ]);
        return view('crud');
}
      public function getcrud(){
        $list=DB::table('cruds')->get();
        return view('crudlist', compact('list'));
      }

      public function editcrud1($id){
       $lists= DB::table('cruds')->where('id', $id)->first();
        return view('editcrud', compact('lists'));
      }
      public function updatecrud(Request $req){
         DB::table('cruds')->where('id', $req->id)->update([
            'title'=>$req->title,
            'description'=>$req->description
        ]);
         return view('crud');
       }  
       public function deletecrud ($id){
           DB::table('cruds')->where('id', $id)->delete();
           return view("crud");
       }

}
