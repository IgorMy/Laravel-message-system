<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use App\Http\Requests\MessagesFormRequest;
use App\Models\file;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MessagesFormRequest $request)
    {

        $validated = $request->validated();

        $message = message::create([
            'messages_description'=>$validated['description'],
            'users_id'=>auth()->user()->id,
            'services_id' => $validated['services_id']
        ]);


        if($request->hasFile('files')){



            foreach($request->file('files') as $file){

                $filename = $file->store('public/documents/'.strval($validated['services_id']).'/'.auth()->user()->id);
                file::create([
                    'users_id'=>auth()->user()->id,
                    'message_id' => $message->id,
                    'files_file_location' => $filename
                ]);
            }
        }

        return redirect()->route('show_services', ['id' => $validated['services_id']]);

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
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
