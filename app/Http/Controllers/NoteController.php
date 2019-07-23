<?php

namespace App\Http\Controllers;

use App\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::orderBy('created_at', 'desc')->get();

        return view('note.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
    
        $note = New Note;

        $note->title = $request->input('title');
        $note->body = $request->input('body');
        $note->save();

        return redirect()->route('note.index')->with('success', 'Note has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findorfail($id);

        return view('note.show')->with('note', $note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::findorfail($id);

        return view('note.edit')->with('note', $note);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        $note = Note::find($id);
        $note->title = $request->input('title');
        $note->body = $request->input('body');
        $note->save();

        return redirect()->route('note.index')->with('success', 'Note has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findorfail($id);
        $note->delete();

        return redirect('/')->with('success', 'Note has been deleted Successfully');
    }
}
