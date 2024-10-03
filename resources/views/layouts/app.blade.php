<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            background-image: url('{{ asset('images/galaxy.jpg') }}');
            height: 100vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            position: fixed;
            padding: 10px;
            top: 0;
            left: 0;
        }

        h1 {
            background: linear-gradient(90deg, rgb(57, 230, 57), rgb(64, 64, 234), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        nav {
            display: flex;
            align-items: center;
            height: 80px;
            background: transparent;
            padding: 30px 40px;
            justify-content: space-between;
        }

        .navbar-brand {

            color: #fff;
            font-size: 30px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .navbar-brand:hover {
            color: rgb(57, 230, 57);
            text-shadow: 0 0 15px rgb(64, 64, 234),
                         0 0 35px #fff;
            transform: scale(1);
        }

        .appSpan {
            background: linear-gradient(90deg, rgb(57, 230, 57), rgb(64, 64, 234), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .navbar-nav {
            display: flex;
            list-style-type: none;
        }

        .navbar-nav li {
            margin-left: 20px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 40px;
            font-size: 18px;
            transition: 0.3s ease-in-out;
        }

        .navbar-nav .a {
            position: relative;
            text-decoration: none;
            color: #fff;
            font-size: 1.1em;
        }

        .navbar-nav .a::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -5px;
            height: 2px;
            background: #fff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar-nav .a:hover::after {
            transform: scaleX(1);
        }

        .createEventBtn {
            display: flex;
            text-align: center;
            align-items: center;
            width: 100%;
            height: 35px;
            padding: 10px 20px;
            font-size: 20px;
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            text-decoration: none;
        }

        .createEventBtn:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-nav li {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <a class="navbar-brand" href="/">Event <span class="appSpan">Planner</span></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="a" href="{{ route('events.index') }}">Events</a>
                    <a href="{{ route('events.create') }}">
                        <button class="createEventBtn">Add Event</button>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
