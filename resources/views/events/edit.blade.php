@extends('layouts.app')

<style>
    .edit-event {
        padding: 20px;
        color: #fff;
        width: 800px;
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

    .createH1 {
        font-size: 40px;
        margin-bottom: 20px;
    }

    form {
        font-size: 24px;
        width: 100%;
    }

    label {
        display: block;
        margin: 0 0 5px 10px;
        text-align: left;
    }

    input[type="text"], input[type="datetime-local"] {
        width: calc(100% - 20px);
        padding: 10px;
        height: 60px;
        font-size: 21px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        margin-bottom: 20px;
    }

    button.updateBtn {
        background-color: transparent;
        border: 2px solid #fff;
        color: #fff;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        transition: background-color 0.3s;
    }

    button.updateBtn:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .back-btn {
        color: #fff;
        margin-top: 30px;
        font-size: 18px;
        font-weight: bold;
    }

    .back-btn:hover {
        text-decoration: underline;
    }
</style>

@section('content')
    <div class="edit-event">
        <h1 class="editH1">Edit Event</h1>
        <form action="{{ route('events.update', $event) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title', $event->title) }}" required>

            <label for="event_date">Event Date</label>
            <input type="datetime-local" name="event_date"
                value="{{ old('event_date', $event->event_date->format('Y-m-d\TH:i')) }}" required>

            <button type="submit" class="updateBtn">Update</button>
        </form>

        <a class="back-btn" href="{{ route('events.index') }}">Back to Events</a>
    </div>
@endsection
