@extends('layouts.app')

<style>
    .createEventContainer {
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

    button.createBtn {
        background-color: transparent;
        border: 2px solid #fff;
        color: #fff;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        transition: background-color 0.3s;
    }

    button.createBtn:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
</style>

@section('content')
    <div class="createEventContainer">
        <h1 class="createH1">Create Event</h1>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <label for="title">Title :</label>
            <input type="text" name="title" required>   

            <label for="event_date">Event Date & Time :</label>
            <input type="datetime-local" name="event_date" required>

            <button type="submit" class="createBtn">Create</button>
        </form>
    </div>
@endsection
