<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{

    public function index()
    {
        $query = Service::query();
        return Inertia::render('Dashboard', [
            'services' => $query->paginate(30),
        ]);
    }
}
