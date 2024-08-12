<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    protected $serviceController;

    public function __construct(ServiceController $serviceController)
    {
        $this->serviceController = $serviceController;
    }

    public function index()
    {
        return redirect()->action([ServiceController::class, 'index']);
    }
}
