<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorsStoreRequest;
use App\Http\Requests\InstructorsUpdateRequest;
use App\Instructor;

class InstructorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::orderBy('id' ,'DESC')->paginate();
        return view('admin.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorsStoreRequest $request)
    {
        $instructor = Instructor::create($request->all());

        if (request()->hasFile('file')) {
            $filename = 'in'.$request->slug.'_'.time().'.'.request()->file('file')->getClientOriginalExtension();
            request()->file->storeAs('public', $filename);

            $instructor->file = $filename;
            $instructor->save();
        }

        return redirect()->route('instructors.index')->with('info', 'Instructor creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        return view('admin.instructors.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstructorsUpdateRequest $request, Instructor $instructor)
    {
        $instructor->update($request->all());

        if (request()->hasFile('file')) {
            $filename = 'in'.$request->slug.'_'.time().'.'.request()->file('file')->getClientOriginalExtension();
            request()->file->storeAs('public', $filename);

            $instructor->file = $filename;
            $instructor->save();
        }

        return redirect()->route('instructors.index')->with('info', 'Instructor editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return redirect()->route('instructors.index')->with('info', 'Instructor eliminado correctamente');
    }
}
