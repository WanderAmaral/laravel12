<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserResquest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBYDesc('id')->paginate(10);

        return view('users.index', ['users' => $users]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(UserResquest $request)
    {
        //dd($request);
        try {
            User::create(['name' => $request->name, 'email' => $request->email, 'password' => $request->password]);

            return redirect()->route('user.create')->with('sucess', 'Usuário cadastrado com sucesso!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Usuário não cadastrado!');
        }
    }
}
