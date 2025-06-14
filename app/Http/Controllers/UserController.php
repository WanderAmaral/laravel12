<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBYDesc('id')->paginate(10);

        return view('users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        //dd($user);
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(UserRequest $request)
    {
        //dd($request);
        try {
            User::create(['name' => $request->name, 'email' => $request->email, 'password' => $request->password]);

            return redirect()->route('user.create')->with('sucess', 'Usuário cadastrado com sucesso!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Usuário não cadastrado!');
        }
    }

    public function edit(User $user)
    {

        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        try {
            $user->update(['name' => $request->name, 'email' => $request->email,]);

            return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuário atualizado com sucesso!');
        } catch (Exception $e) {

            //dd($e->getMessage());
            return back()->withInput()->with('error', 'Usuário não atualizado!');
        } 
    }
}
