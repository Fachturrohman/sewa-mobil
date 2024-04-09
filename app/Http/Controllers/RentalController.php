<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Car;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::where('user_id', auth()->user()->id)->with('user', 'car')->get();

        return view('rental.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        return view('rental.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date|after_or_equal:today',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'carid' => 'required',
        ], [
            'tanggal_mulai.after_or_equal' => 'Tanggal mulai tidak boleh kurang dari hari ini.',
            'tanggal_selesai.after_or_equal' => 'Tanggal selesai tidak boleh kurang dari tanggal mulai.',
        ]);

        $existingRental = Rental::where('car_id', $request->carid)
        ->where(function ($query) use ($request) {
            $query->whereBetween('tanggal_mulai', [$request->tanggal_mulai, $request->tanggal_selesai])
                ->orWhereBetween('tanggal_selesai', [$request->tanggal_mulai, $request->tanggal_selesai]);
        })
        ->exists();

        if ($existingRental) {
            return redirect()->back()->withInput()->withErrors(['tanggal_mulai' => 'Mobil sudah disewa pada rentang tanggal yang dimasukkan.']);
        }

        $rental = new Rental;
        $rental->user_id = auth()->user()->id;
        $rental->car_id = $request->carid;
        $rental->tanggal_mulai = $request->tanggal_mulai;
        $rental->tanggal_selesai = $request->tanggal_selesai;
        $rental->status = 1;
        $rental->save();

        return redirect()->route('rentals.index')
            ->with('success', 'Sewa Mobil berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        //
    }

    public function return()
    {
        return view('rental.return');
    }
}
