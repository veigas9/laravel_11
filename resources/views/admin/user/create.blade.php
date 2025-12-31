@extends('admin.layouts.app')

@section('content')
    <h1> Novo Usuário </h1>

        <x-alerts />

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="name">Nome:</label><br/>
            <input type="text" id="name" name="name" value="{{ old('name') }}"/><br/>

            <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email" value="{{ old('email') }}"/><br/>

            <label for="password">Senha:</label><br/>
            <input type="password" id="password" name="password" value="{{ old('password') }}"/><br/>

            <button type="submit">Criar Usuário</button>        
        </form> 

@endsection
