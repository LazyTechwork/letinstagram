<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index(Request $request): View
    {
        return view('welcome');
    }

    public function register(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = User::create([
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password'))
        ]);
        $user->information()->create([
            'name'     => $request->get('name'),
            'birthday' => $request->date('birthday')
        ]);
        return to_route('home');
    }

    public function profile(int $id)
    {
        $user = User::where('id', $id)->first();
        dd($user->information->birthday);
        return \view('profile');
    }
}
