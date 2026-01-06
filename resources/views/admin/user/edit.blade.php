@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1> Editar Usuário {{ $user->name }} </h1>

    <x-breadcrumb :breadcrumbs="[['label' => 'Usuários', 'url' => route('user.index')], ['label' => 'Editar Usuário']]" />

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('put')
        @include('admin.user.partials.form')
        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Editar Usuário
        </button>
    </form>

@endsection
