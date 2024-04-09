<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif' => 'required|numeric',
        ]);

        Car::create($request->all());
        
        return redirect()->route('cars.index')
            ->with('success', 'Data Mobil berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif' => 'required|numeric',
        ]);

        $car->update($request->all());
        return redirect()->route('cars.index')
            ->with('success', 'Data Mobil berahasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')
        ->with('success', 'Data mobil berhasil dihapus');
    }
}
