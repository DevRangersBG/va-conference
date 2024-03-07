<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\PasswordlessLogin;
use App\Providers\CustomRouteServiceProvider;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(): RedirectResponse
    {
        request()->validate(['email' => 'required']);

        $user = User::where(['email' => request('email')])->first();

        if (! $user) {
            return back()->withErrors(['email' => 'No matching account found.']);
        }

        $link = URL::temporarySignedRoute('login.token', now()->addHour(), ['user' => $user->id]);

        $user->notify(new PasswordlessLogin($link));

        return back()->with('status', 'Please check your email for a login link!');
    }

    public function loginViaToken(User $user)
    {
        Auth::login($user);

        request()->session()->regenerate();

        return redirect(CustomRouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
