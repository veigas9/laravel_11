<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
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

       User::create($request->validated());

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

    /**
     * Atualiza um Usuário
     *
     * @return void
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('user.index')->with('error', 'Usuário não encontrado!');
        }        

        $data = $request->only('name', 'email');
        // dd($data);

        if($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }      

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'Usuário atualizado com sucesso!');
    }
}
