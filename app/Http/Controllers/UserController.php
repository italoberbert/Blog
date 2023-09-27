<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\CreatedUser;

class UserController extends Controller
{
    public function create () 
    {
        return view('user_create', [
            'title' => 'Create user'
        ]);
    }

    public function store (UserRequest $request) 
    {
       $validated = $request->validated();
       event(new CreatedUser($validated));

       $saved= (new User())->insert($validated);
       

       if ($saved) {
            $request->session()->flash('success','Cadastrado com sucesso');
            event(new CreatedUser($validated));
       } else {
            $request->session()->flash('error', 'Erro ao cadastrar');
       }

       return back();
     }
     
     public function edit (User $user)
     {
        return view('user_edit', [
            'title' => 'Edit user',
            'user' => $user
        ]);
     }

     public function show(User $user) 
     {
        return view('user', [
            'title' => 'User',
            'user' => $user
        ]);

     }

     public function update (Request $request, User $user) 
     {
        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
        ]);

        $updated = $user->update($validated);

        ($updated) ?
            $request->session()->flash('updated_success', 'Atualizado com sucesso'):
            $request->session()->flash('updated_error', 'Erro ao atualizar');
        
        return back();
     }
     public function destroy(User $user) 
     {
        dd($user->delete());

        return back();
    
     }
}
