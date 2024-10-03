@extends('layouts.app')

<style>
    h2 {
        font-size: 70px;
        background: linear-gradient(90deg, #fff, rgb(64, 64, 234), rgb(57, 230, 57)); /* Example gradient */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .eventsBtn {
        width: 100%;
        height: 60px;
        padding: 10px 20px;
        font-size: 24px;
        background: transparent;
        border: 2px solid #fff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 30px;
        transition: 0.3s ease-in-out;
    }

    .content {
        right: 0;
        display: flex;
        width: 50%;
        color: #fff;
        text-align: center;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
    }

    img {
        width: 50%;
        display: flex;
        right: 0;
        top: 20%;
        position: absolute;
    }

    .eventsBtn:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
</style>


@section('content')
    <h2>Welcome to the Event Planner</h2>
    <a class="events" href="{{ route('events.index') }}"><button class="eventsBtn">View Events</button></a>

    <img src="{{ asset('images/eventimg.webp') }}" alt="images">
@endsection
