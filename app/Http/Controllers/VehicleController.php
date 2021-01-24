<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Vehicle::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return Inertia::render('Vehicles', ['vehicles' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return \Inertia\Inertia::render('vehicle_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'reg' => ['required'],
            'make' => ['required'],
            'model' => ['required'],
            'mileage' => ['required']
        ]);

        $vehicle = new Vehicle();
        $vehicle->name = $request->get('name');
        $vehicle->reg = $request->get('reg');
        $vehicle->make = $request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->mileage = $request->get('mileage');
        $vehicle->user_id = Auth::id();
        if ($vehicle->save()) {
            return redirect('/vehicles');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Vehicle $vehicle
     * @return Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Vehicle $vehicle
     * @return Response
     */
    public function edit(Vehicle $vehicle)
    {
        return Inertia::render('vehicle_edit', ['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Vehicle $vehicle
     * @return Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->name = $request->get('name');
        $vehicle->reg = $request->get('reg');
        $vehicle->make = $request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->mileage = $request->get('mileage');
        if ($vehicle->save()) {
            return redirect('/vehicles');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vehicle $vehicle
     * @return Response
     */
    public function destroy(Vehicle $vehicle)
    {
        if ($vehicle->delete()) {
            return redirect('/vehicles');
        }
    }
}
