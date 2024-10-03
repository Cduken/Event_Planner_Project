@extends('layouts.app')

<style>
    .events-content {
        padding: 20px;
        color: #fff;
        width: 100%;
        max-width: 800px;
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        text-align: center;
        border-radius: 10px;
        background: transparent;
        backdrop-filter: blur(20px);
    }

    .no-events-message {
        font-size: 24px;
    }

    .eventsH1 {
        font-size: 40px;
        margin-bottom: 20px;
    }

    .events-table-container {
        width: 100%;
        max-height: 400px;
        overflow-y: auto;
        margin-top: 20px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.1);
    }

    .events-table {
        width: 100%;
        border-collapse: collapse;
    }

    .events-table th,
    .events-table td {
        color: #fff;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    .events-table th {
        background-color: rgba(255, 255, 255, 0.1);
        font-weight: bold;
        color: yellowgreen;
    }

    .events-table tr:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .events-table-container::-webkit-scrollbar {
        width: 10px;
    }

    .events-table-container::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }

    .events-table-container::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
    }

    .events-table-container::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    .events-table-container {
        scrollbar-width: thin;
        scrollbar-color: rgba(255, 255, 255, 0.3) rgba(255, 255, 255, 0.1);
    }

    .editBtn {
        width: 80%;
        height: 25px;
        border: 1px solid #fff;
        font-size: 16px;
        border-radius: 3px;
        background: transparent;
        color: #fff;
        cursor: pointer;
        margin-bottom: 10px;
        transition: 0.3s ease;
    }

    .editBtn:hover {
        background-color: rgb(4, 146, 4);

    }

    .deleteBtn {
        width: 80%;
        height: 25px;
        border: 1px solid #fff;
        font-size: 16px;
        border-radius: 3px;
        background: transparent;
        color: #fff;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .deletebtn:hover {
        background-color: rgb(230, 83, 83);

    }

    .clearBtn {
        width: 120px;
        height: 40px;
        border: none;
        font-size: 16px;
        border-radius: 5px;
        background: transparent;
        border: 2px solid #fff;
        color: #fff;
        cursor: pointer;
        transition: 0.3s ease;
        margin-top: 30px;
    }

    .clearBtn:hover {
        background-color: skyblue;
    }
</style>

@section('content')
    <div class="events-content">
        <h1 class="eventsH1">Events</h1>
        @if ($events->isEmpty())
            <div class="no-events-message">No events available. Please create an event.</div>
        @else
            <div class="events-table-container">
                <table class="events-table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date & Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->event_date }}</td>
                                <td>
                                    <a href="{{ route('events.edit', $event) }}"><button class="editBtn">Edit</button></a>
                                    <form action="{{ route('events.destroy', $event) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="deleteBtn" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <button class="clearbtn"
                onclick="event.preventDefault(); document.getElementById('clear-form').submit();">Clear</button>

            <form id="clear-form" action="{{ route('events.clear') }}" method="POST" style="display:none;">
                @csrf
            </form>
        @endif
    </div>
@endsection
