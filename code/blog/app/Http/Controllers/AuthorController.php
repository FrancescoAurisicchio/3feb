<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function ShowAllAuhtor(){

        $allAuthor = Author::all();

        return response()->json($allAuthor);
    }

     public function ShowOneAuthor($id)
  {
     $author = Author::find($id);
     //dd($author);
    return response()->json($author);

   }
   public function create(Request $request)
    {
// dd($request->name);

        $author =  Author::create([
           'name' => $request->name,
           'surname' => $request->surname,
           'email' => $request->email,
       ]);

        

        return response()->json($author);
    }
    
  
    public function delete($id)
    {

        $author = Author::findOrFail($id)->delete();

        return response('Deleted Successsfuly ');
// }
    }
  
       
    public function edit($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response('Edit Succerfully');
    }
    function ciao(){
        echo 'hey';
    }
}