 <x-alerts />
<label for="name">Nome:</label><br/>
<input type="text" id="name" name="name" value="{{ $user->name ?? old('name')  }}"/><br/>

<label for="email">Email:</label><br/>
<input type="email" id="email" name="email" value="{{ $user->email ?? old('email') }}"/><br/>

<label for="password">Senha:</label><br/>
<input type="password" id="password" name="password"/><br/>