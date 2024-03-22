<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilote Management</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: rgba(36, 43, 68, 1);
        }

        main {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 150px;
            left: 50px;
            color: white;
            padding-top: 25px;
            font-family: 'Trebuchet MS', sans-serif;
            z-index: 3;
            padding-bottom: 50px;
        }

        .class1 {
            display: flex;
            justify-content: space-between;
            position: static;
            z-index: -1;
        }

        .angle {
            width: 90px;
            height: 130px;
        }

        .angle1 {
            width: 550px;
            height: 650px;
        }

        .class2 {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 50px;
            position: fixed;
            top: 0;
            width: 100%;
            color: white;
            padding: 10px;
            padding-left: 80px;
            font-family: 'Trebuchet MS', sans-serif;
            z-index: 3;
        }

        .Logo {
            font-weight: bold;
            font-size: 20px;
        }

        .class2>div>a {
            text-decoration: none;
            color: inherit;
        }

        .class3 {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            position: fixed;
            top: 0;
            right: 200px;
            color: white;
            padding-top: 25px;
            font-family: 'Trebuchet MS', sans-serif;
            z-index: 3;
        }

        .class3 button,
        .create button,
        form button[type="submit"] {
            background-color: rgba(35, 166, 240, 1);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-family: 'Trebuchet MS', sans-serif;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .class3 button:hover,
        .create button:hover,
        form button[type="submit"]:hover {
            background-color: rgba(35, 166, 240, 0.8);
        }

        .notif {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            position: fixed;
            top: 0;
            right: 350px;
            padding-top: 20px;
            z-index: 3;
        }

        .notif img {
            width: 50px;
            height: 55px;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .notif img:hover {
            transform: scale(1.1);
        }
    </style>

</head>
<div class="class3">
    <button>My Profile</button>
</div>
<div class="notif">
    <div><img class="notif" src="{{ asset('pictures/notif.png') }}" />
    </div>
</div>
</header>

<body>
    <header>
        <div class="class1">
            <div><img class="angle" src="{{ asset('pictures/Rectangle 14.png') }}" />
            </div>
            <div><img class="angle1" src="{{ asset('pictures/Rectangle 13.png') }}" />
            </div>
        </div>
        <nav>
            <div class="class2">
                <div class="Logo">
                    <a href="">
                        <p>NEXT</p>
                    </a>
                </div>
                <div>
                    <a href="">
                        <p>Internship Offers</p>
                    </a>
                </div>
                <div>
                    <a href="">
                        <p>Companies</p>
                    </a>
                </div>
                <div>
                    <a href="">
                        <p>Contact</p>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        </main>
</body>

</html>