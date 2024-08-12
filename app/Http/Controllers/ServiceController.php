<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Service;

class ServiceController extends Controller
{

    public function getServices()
    {
        return Service::inRandomOrder()->take(30)->get();
    }

    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();

        // Retorna a view com os serviços para o frontend
        return Inertia::render('Services/Index', [
            'services' => $services,
        ]);
    }

    public function create()
    {
        return Inertia::render('Services/Create', [

        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'category' => ['required', 'max:255'],
            'description' => ['required'],
            'whatsapp_number' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
        ]);

        $request->user()->services()->create($validatedData);
        return redirect()->route('dashboard')->with('success', 'Service created.');
    }
}
