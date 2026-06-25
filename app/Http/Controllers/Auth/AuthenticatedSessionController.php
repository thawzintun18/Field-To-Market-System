<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User_Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('authentication.home.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $roles = User_Role::leftJoin('roles', 'user__roles.role_id', 'roles.id')
            ->where('user__roles.user_id', $request->user()->id)
            ->pluck('roles.name');

        // dd($roles->count());

        if($roles->count() == 1 && $roles->contains('Farmer')){

            return redirect()->intended(route('farmer#dashboard', absolute: false));

        }else{

            return redirect()->intended(route('authentication#driectPage', absolute: false));

        }


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
