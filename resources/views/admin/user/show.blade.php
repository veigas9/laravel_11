@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1> Detalhes do Usuário </h1>
    <x-breadcrumb :breadcrumbs="[['label' => 'Usuários', 'url' => route('user.index')], ['label' => 'Detalhes do Usuário']]" />
       <ul>
        <li><strong>ID:</strong> {{ $user->id }}</li>
        <li><strong>Nome:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
       </ul>

       @can('is-admin')
            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Excluir Usuário</button>
            </form> 
       @endcan
@endsection
