<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;

class ConferenceController extends Controller
{
    // konferencijų sąrašas
    public function index()
    {
        $conferences = Conference::orderBy('conference_date', 'asc')->get();

        return view('conferences.index', compact('conferences'));
    }

    // peržiūra (papildomas punktas)
    public function show(Conference $conference)
    {
        return view('conferences.show', compact('conference'));
    }

    public function create()
    {

        return view('conferences.create');
    }

    public function store(StoreConferenceRequest $request)
    {
        Conference::create($request->validated());

        return redirect()
            ->route('conferences.index')
            ->with('success', __('app.conference_created'));
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }

    public function update(UpdateConferenceRequest $request, Conference $conference)
    {
        $conference->update($request->validated());

        return redirect()
            ->route('conferences.index')
            ->with('success', __('app.conference_updated'));
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()
            ->route('conferences.index')
            ->with('success', __('app.conference_deleted'));
    }
}
