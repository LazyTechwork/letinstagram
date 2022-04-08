<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index(): View
    {
        return \view('home');
    }

    public function login(): View
    {
        return \view('auth.login');
    }

    public function register(): View
    {
        return \view('auth.register');
    }

    public function authorization(): RedirectResponse
    {
        $user = User::whereUsername($this->request->get('username'))->first();
        if (!$user || !Hash::check($this->request->get('password'), $user->password)) {
            \Session::flash('error', 'Вы ввели неправильный логин или пароль');
            return redirect()->back();
        }
        \Auth::login($user);
        return to_route('home');
    }

    public function registration(): RedirectResponse
    {
        $user = User::create([
            'username' => $this->request->get('username'),
            'password' => Hash::make($this->request->get('password'))
        ]);
        \Auth::login($user);
        return to_route('home');
    }

    public function logout(): RedirectResponse
    {
        \Auth::logout();
        return to_route('auth.login');
    }

    public function profile(): Factory|View|Application
    {
        /** @var User $user */
        $user = User::whereId(Auth::id())->with('information')->first();
        $posts = $user->posts()->latest()->paginate(20);
        return \view('profile', compact('user', 'posts'));
    }

    public function profile_edit()
    {
        $user = User::whereId(Auth::id())->with('information')->first();
        return \view('profile.edit', compact('user'));
    }
}
