@extends('admin.layouts.app')

@section('content')
    <h1> Novo Usuário </h1>       

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            @include('admin.user.partials.form')
            <button type="submit">Criar Usuário</button>        
        </form> 

@endsection
