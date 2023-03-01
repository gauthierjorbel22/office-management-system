<?php

namespace App\Http\Controllers;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Manager::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string",
            'surname'=>"required|string",
            'department_id'=>"required|integer"
        ]);
        return Manager::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Manager::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manager = Manager::find($id);
        $manager->update($request->all());
        return $manager;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Manager::destroy($id);
    }
}
