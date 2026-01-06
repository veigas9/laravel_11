
# Aplicação Laravel 11

Este repositório é um esqueleto de aplicação Laravel 11 com autenticação (Breeze), gerenciamento de usuários (área administrativa), perfil de usuário e componentes Blade prontos.

**Resumo rápido:** autenticação completa (registro, login, reset de senha, verificação de e‑mail), painel de usuário (`/dashboard`), edição de perfil e CRUD de usuários para administradores.

**Requisitos**
- PHP >= 8.2
- Composer
- Node.js >= 18 e npm
- Banco de dados (MySQL, MariaDB, SQLite, etc.)
- Opcional: Laragon (Windows) para ambiente local

**Instalação (passo a passo)**
1. Clone o repositório:

	git clone https://github.com/veigas9/laravel_11.git

2. Instale dependências PHP:

	composer install

3. Copie o arquivo de ambiente e gere a chave da aplicação:

	copy .env.example .env
	php artisan key:generate

4. Configure o banco de dados no `.env` (ex.: `DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

	- Para um teste rápido local você pode usar SQLite: crie `database/database.sqlite` e ajuste `DB_CONNECTION=sqlite`.

5. Rode as migrations:

	php artisan migrate

6. Instale dependências front-end e construa assets:

	npm install
	npm run dev    # desenvolvimento (hot-reload com Vite)
	npm run build  # build para produção

7. Inicie o servidor de desenvolvimento:

	php artisan serve

8. (Opcional) O `composer.json` inclui scripts úteis:

	- `composer setup` — executa instalação, copia `.env`, gera chave e roda migrations + build.
	- `composer dev` — executa tarefas em paralelo (serve, queue, pail, vite).

**Executando testes**

 - php artisan test
 - Ou: vendor/bin/pest

**Principais rotas**

 - Rotas de autenticação e perfil: veja [routes/auth.php](routes/auth.php) e [routes/web.php](routes/web.php).
 - Dashboard: `/dashboard` (requer `auth` e `verified`).
 - Área administrativa de usuários: prefixo `/admin` (requer `auth`) — rotas definidas em [routes/web.php](routes/web.php).

**Funcionalidades detalhadas**

 - Autenticação (Laravel Breeze): registro, login, logout, reset de senha, verificação de e‑mail. Arquivos principais: [routes/auth.php](routes/auth.php) e controladores em `app/Http/Controllers/Auth`.

 - Perfil do usuário:
	- Editar informações e atualizar senha: `ProfileController@edit/update` — [app/Http/Controllers/ProfileController.php](app/Http/Controllers/ProfileController.php).
	- Deletar conta (requer confirmação de senha) — comportamento definido em `ProfileController`.

 - Administração de usuários (CRUD):
	- Listar, criar, editar, mostrar e deletar usuários: [app/Http/Controllers/Admin/UserController.php](app/Http/Controllers/Admin/UserController.php).
	- Visões de administração em `resources/views/admin/user/*` (index, create, edit, show).
	- Paginação aplicada na listagem (`paginate(10)`).
	- Exclusão usa a trait `SoftDeletes` no modelo `User` — veja [app/Models/User.php](app/Models/User.php).
	- Proteção de rota para administradores: middleware [app/Http/Middleware/CheckIfIsAdmin.php](app/Http/Middleware/CheckIfIsAdmin.php). O método `User::isAdmin()` verifica e‑mails listados em [config/custom.php](config/custom.php).

 - Componentes Blade e layouts:
	- Arquivos de layout e componentes estão em `resources/views/layouts` e `resources/views/components`.
	- Ex.: `layouts/app.blade.php`, `layouts/guest.blade.php`, `components/primary-button.blade.php`.

**Arquivos importantes**

 - [app/Models/User.php](app/Models/User.php) — modelo de usuário (SoftDeletes, casts e `isAdmin`).
 - [app/Http/Controllers/Admin/UserController.php](app/Http/Controllers/Admin/UserController.php) — CRUD de usuários.
 - [app/Http/Controllers/ProfileController.php](app/Http/Controllers/ProfileController.php) — edição/atualização/exclusão de perfil.
 - [app/Http/Middleware/CheckIfIsAdmin.php](app/Http/Middleware/CheckIfIsAdmin.php) — middleware que impede acessos não administrativos.
 - [config/custom.php](config/custom.php) — lista de administradores (e‑mails) usada por `isAdmin()`.
 - [routes/web.php](routes/web.php) e [routes/auth.php](routes/auth.php) — definição de rotas públicas, protegidas e administrativas.

**Observações e dicas**

 - Para criar administradores, adicione o e‑mail no array `admins` em [config/custom.php](config/custom.php) ou implemente um campo `role` no `users`.
 - O projeto usa Laravel Breeze para scaffolding de autenticação — se quiser usar Jetstream ou outro pacote, substitua os componentes conforme necessário.
 - Se estiver usando Laragon no Windows, você pode apontar o root para esta pasta e usar phpMyAdmin para configurar o banco rapidamente.
