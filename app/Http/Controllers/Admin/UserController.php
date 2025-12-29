<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function store(Request $request)
    {
        // dd("chegou aqui");

        // Validação dos dados
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // Criação do usuário
        // User::create([
        //     'name' => $validatedData['name'],
        //     'email' => $validatedData['email'],
        //     'password' => bcrypt($validatedData['password']),
        // ]);

       User::create($request->all());

        // Redireciona para a lista de usuários com uma mensagem de sucesso
        //return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
        return redirect()->route('user.index');
    }   
}
