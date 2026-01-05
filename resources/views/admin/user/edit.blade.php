@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1> Editar Usuário {{ $user->name }} </h1>
       

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('put')
            @include('admin.user.partials.form')
            <button type="submit">Editar Usuário</button>        
        </form> 

@endsection
