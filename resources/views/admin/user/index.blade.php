@extends('admin.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-8">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Lista de Usuários</h1>

        <x-alerts class="mb-4" />

        <a href="{{ route('user.create') }}" class="inline-block mb-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Adicionar Novo Usuário</a>

        <div class="overflow-x-auto">
            <table class="w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 dark:text-gray-300">ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 dark:text-gray-300">Nome</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 dark:text-gray-300">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 dark:text-gray-300">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="border-t border-gray-300 dark:border-gray-700">
                            <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200">{{ $user->id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200">{{ $user->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200">{{ $user->email }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200">
                                <a href="{{ route('user.edit', $user->id) }}" class="text-indigo-600 hover:underline">Editar</a>
                                <a href="{{ route('user.show', $user->id) }}" class="text-indigo-600 hover:underline">Visualizar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center text-sm text-gray-600 dark:text-gray-400">Nenhum usuário encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
@endsection


