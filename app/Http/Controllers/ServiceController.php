<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use App\Http\Requests\ServicePostRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $my_services = service::paginate(7);

        return view('services.services',['my_services'=>$my_services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ServicePostRequest $request)
    {

        $validated = $request->validated();

        $service = service::create([
            'services_name'=>$validated['name'],
            'services_description'=>$validated['description'],
            'users_id'=>auth()->user()->id
        ]);

        return redirect()->route('show_services', ['id' => $service->id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $service = service::findOrFail($id);
        $messages = $service->messages()->paginate(5);

        return view('services.service',['service'=>$service,'messages'=>$messages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
