<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      $users = User->get();
      return json_encode(['success' => true, 'users' => $users]);
    }

    public function show($id)
    {
      $user = User::findOrFail($id);
      return json_encode(['user' => $user]);
    }

    public function create()
    {
      return view('user.create');
    }

    /*la validación es disparada antes de que se cree el user*/
    public function store(Request $request)
    {
      $encriptada = bcrypt($request->input('password'));
      $request->merge(['password' =>  $encriptada]);

      User::create($request->all());
      flash()->success('El user ha sido creado');
      return view('index');
    }

    public function edit($id)
    {
      $user = User::findOrFail($id);
      return json_encode(['success' => true, 'user' => $user]);
    }

    public function update($id, userRequest $request)
    {
      $user = User::findOrFail($id);
      $user->update($request->all());
      return redirect('user');
    }

    public function destroy($id)
    {
      User::find($id)->delete();
      return Redirect::back()->with('message','Operation Successful !');
    }

}
