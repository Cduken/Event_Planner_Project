<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('events.create');
    }

    // Store a newly created event
    public function store(Request $request)
    {
        $this->validateEvent($request);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }

    // Show the form for editing an event
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Update an event
    public function update(Request $request, Event $event)
    {
        $this->validateEvent($request);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }

    // Delete an event
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }

    // Clear all events from the table
    public function clear()
    {
        Event::truncate();

        return redirect()->route('events.index')->with('success', 'All events cleared successfully.');
    }

    // Validate event data
    protected function validateEvent(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
        ]);
    }
}
