@extends('admin.layouts.app')

@section('content')
    <h1> Novo Usuário </h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="name">Nome:</label><br/>
            <input type="text" id="name" name="name"/><br/><br/>

            <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email"/><br/><br/>

            <label for="password">Senha:</label><br/>
            <input type="password" id="password" name="password"/><br/><br/>

            <button type="submit">Criar Usuário</button>        </form>

@endsection
