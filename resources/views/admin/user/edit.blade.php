@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1> Editar Usuário {{ $user->name }} </h1>
        <x-alerts />

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('put')
            <label for="name">Nome:</label><br/>
            <input type="text" id="name" name="name" value="{{ $user->name }}"/><br/>

            <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email" value="{{ $user->email }}"/><br/>

            <label for="password">Senha:</label><br/>
            <input type="password" id="password" name="password" value="{{ old('password') }}"/><br/>

            <button type="submit">Editar Usuário</button>        
        </form> 

@endsection
