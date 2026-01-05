<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Lista todos usuários
     *
     * @return void
     */
    public function index()
    {
        // $users = User::all();
        $users = User::paginate(10);

        // dd($users);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Cria novo Usuário
     *
     * @return void
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Armazena novo Usuário
     *
     * @return void
     */
    public function store(StoreUserRequest $request)
    {        

       User::create($request->all());

        // Redireciona para a lista de usuários com uma mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
        // return redirect()->route('user.index');
    } 
    
    /**
     * Edita um Usuário
     *
     * @return void
     */
    public function edit(string $id)
    {
        // $user = User::findOrFail($id);

        if (!$user = User::find($id)) {
            return redirect()->route('user.index')->with('error', 'Usuário não encontrado!');
        }        
        
        return view('admin.user.edit', compact('user'));
    }

    // public function update(StoreUserRequest $request, string $id)
    public function update(Request $request, string $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('user.index')->with('error', 'Usuário não encontrado!');
        }        

        $user->update($request->only([
            'name',
            'email'        
        ]));

        return redirect()->route('user.index')->with('success', 'Usuário atualizado com sucesso!');
    }
}
