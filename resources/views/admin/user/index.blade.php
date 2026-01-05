@extends('admin.layouts.app')

@section('content')
    <h1> Lista de Usuários </h1>

        <x-alerts />

        <a href="{{ route('user.create') }}">Adicionar Novo Usuário</a>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                        </td>
                    </tr>
                @empty                    
                    <tr>
                        <td colspan="3">Nenhum usuário encontrado.</td>
                    </tr>                    
                @endforelse
            </tbody>
        </table>
    {{ $users->links() }}
    
@endsection


