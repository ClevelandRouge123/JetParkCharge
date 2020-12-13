<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

//use Inertia;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = User::all();
        return \Inertia\Inertia::render('Management', ['vehicles' => $data]);
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
        request()->validate([
            'name' => ['required', 'string'],
            'registration_number' => ['required']
        ]);

        $vehicle = new Vehicle();
        $vehicle->name = $request->get('name');
        $vehicle->reg = $request->get('registration_number');
        $vehicle->user_id = Auth::id();
        if ($vehicle->save()) {
            return 'Success';
        } else {
            return 'Fail';
        }


        $user = User::find(auth()->user('id'));
//        dd($user);
        $user->vehicle->create([
            'name' => $request->name,
            'reg' => $request->registration_number
        ]);
        return \Inertia\Inertia::render('Management');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vehicle $vehicle
     * @return Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
