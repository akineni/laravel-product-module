<?php

namespace App\Http\Controllers;

use Illuminate\Http\{ Request, RedirectResponse };
use App\Services\AuthService;

class DashboardController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function view(Request $request)
    {
        return view('dashboard.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->authService->logout($request);

        return redirect('/');
    }
}
