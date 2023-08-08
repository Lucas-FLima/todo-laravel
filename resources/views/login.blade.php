<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">Registre-se</a>
    </x-slot:btn>
    Tela de Login
    <a href="{{route('home')}}" class="btn btn-primary">Logar</a>
</x-layout>