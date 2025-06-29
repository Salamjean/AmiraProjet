<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Port Autonome Abidjan</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: 0 auto;
    }
    input{
        margin: 10px 0;
    }
    button{
        margin: 10px 0;
    }
    a{
        text-align: center;
        display: block;
    }
</style>
<body>
    <form method="post" action="{{ route('handleLogin.admin') }}">
        @csrf
        @method('POST')
        <h1>Se Connecter</h1>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="password">Mot de passe:</label> 
        <input type="password" id="password" name="password">
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <button type="submit">S'inscrire</button>
        <a href="{{ route('register.admin') }}">Pas encore de compte? Créer un compte</a>
    </form>
</body>
</html>