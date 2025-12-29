
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Laravel 11</title>
    </head>
    <body>
        <h1> Lista de Usuários </h1>

        <a href="{{ route('user.create') }}">Adicionar Novo Usuário</a>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @empty                    
                    <tr>
                        <td colspan="3">Nenhum usuário encontrado.</td>
                    </tr>                    
                @endforelse
            </tbody>
        </table>

    {{ $users->links() }}
    </body>
</html>