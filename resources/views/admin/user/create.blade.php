@extends('admin.layouts.app')

@section('content')     

<x-breadcrumb :breadcrumbs="[['label' => 'Usuários', 'url' => route('user.index')], ['label' => 'Criar Usuário']]" />

<div class="max-w-4xl mx-auto py-8">
    <form action="{{ route('user.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @include('admin.user.partials.form')
        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Criar Usuário</button>
    </form>
</div>

@endsection
