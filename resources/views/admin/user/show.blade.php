@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1> Detalhes do Usuário </h1>
       <ul>
        <li><strong>ID:</strong> {{ $user->id }}</li>
        <li><strong>Nome:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
       </ul>

       <form action="{{ route('user.destroy', $user->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Excluir Usuário</button>
        </form>         

@endsection
