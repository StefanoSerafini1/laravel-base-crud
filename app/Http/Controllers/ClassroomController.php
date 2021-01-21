<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;


// Tabella predisposta da Laravel con tutti i metodi CRUD, creata automaticamente con il comando da terminale 'php artisan make:controller --resource ClassroomController'

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from DB
        $classrooms = Classroom::all();
        // dd($classrooms);
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //asssegnazione
        $data = $request->all();
        // VALIDATION
        $request->validate([
            'name' => 'required|unique:classrooms|max:10',
            'description' => 'required',
        ]);
        // SAVE DATA TO DB
        $classroom = new Classroom();
        $classroom->name = $data['name'];
        $classroom->description = $data['description'];
        $saved = $classroom->save();
        // REDIRECT
        if ($saved) {
            return redirect()->route('classrooms.show' , $classroom->id);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = Classroom::find($id);
        
        return view('classrooms.show', compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}