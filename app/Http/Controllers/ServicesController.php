<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
        if (!$service) {
            abort(404);
        }
        return view('services.show', compact('service'));
    }


    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        Service::create($validatedData);

        return redirect()->route('services.index')->with('success', 'Service created successfully!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        $service = Service::findOrFail($id);
        $service->update($validatedData);

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
}
