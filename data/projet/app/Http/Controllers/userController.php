<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\From;

class userController extends Controller
{
    public function display()
    {
      $users = Users::all();
      return view('coinfig.show', ['users' => $users]);
    }

    public function insert()
    {
       $froms = From::all();
       return view('coinfig.insert', ['froms' => $froms]);
    }

    public function insertMe(Request $request)
    {
       $newUser = new Users;
       $newUser->name = $request->input('name');
       $newUser->surname = $request->input('surname');
       $newUser->excerpt = $request->input('excerpt');
       $newUser->save();
       return redirect('/employes');
    }

    public function deleteMe(Request $request)
    {
        Users::destroy($request->input('id'));
        return redirect('/employes');
    }

    public function update(Request $request)
    {
        $user = Users::find($request->input('id'));
        return view('coinfig.update', ['user' => $user]);
    }

    public function updateMe(Request $request)
    {
        $user = Users::find($request->input('id'));
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->excerpt = $request->input('excerpt');
        $user->save();

        return redirect('/employes');
    }
}
