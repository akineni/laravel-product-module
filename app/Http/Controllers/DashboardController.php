<?php

namespace App\Http\Controllers;

use Illuminate\Http\{ Request, RedirectResponse };
use App\Services\AuthService;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    protected AuthService $authService;
    protected $dashboardService;

    public function __construct(AuthService $authService, DashboardService $dashboardService)
    {
        $this->authService = $authService;
        $this->dashboardService = $dashboardService;
    }

    public function view(Request $request)
    {
        $stats = $this->dashboardService->getStats();
        return view('dashboard.index', $stats);
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->authService->logout($request);

        return redirect('/');
    }
}
