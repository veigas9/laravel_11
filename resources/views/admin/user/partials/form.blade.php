<x-alerts />

<div class="mb-4">
    <label for="name" class="block text-sm font-medium text-gray-700">Nome:</label>
    <input type="text" id="name" name="name" value="{{ $user->name ?? old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
</div>

<div class="mb-4">
    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email ?? old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
</div>

<div class="mb-4">
    <label for="password" class="block text-sm font-medium text-gray-700">Senha:</label>
    <input type="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
</div>