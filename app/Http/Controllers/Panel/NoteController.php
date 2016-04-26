<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\NotesRequest;
use App\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        $page_name = 'notes';
        return view('admin.notes.index', compact('notes', 'page_name'));
    }

    public function save(NotesRequest $request)
    {
        $notes = new Notes();
        $notes::create($request->except('_token'));
        return Response::json(['success' => true]);
    }

    public function show($id)
    {
        $note = Notes::find($id);
        return view('admin.notes.single', compact('note'));
    }

    public function delete($id)
    {
        $note = Notes::find($id);
        $note->delete();
        return redirect()->back();
    }

}
