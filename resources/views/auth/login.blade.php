<x-layouts.app>
    <h1 class="text-4xl mb-5">Авторизация</h1>
    <form action="{{ route('auth.login') }}" method="POST" class="w-50">
        @csrf
        <label>
            <input required class="border text-lg rounded-lg px-5 py-2 w-full my-2" name="username" type="text" placeholder="Имя пользователя">
        </label>
        <label>
            <input required class="border text-lg rounded-lg px-5 py-2 w-full my-2" name="password" type="password" placeholder="Пароль">
        </label>
        <button type="submit" class="border bg-blue-500 text-white text-lg rounded-lg px-5 py-2 my-2 w-full">Войти</button>
    </form>
</x-layouts.app>
