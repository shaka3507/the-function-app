<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&Cormorant:ital,wght@0,300..700;1,300..700&family=DM+Serif+Text:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <title>The Function - Mika's Flowering Fortieth</title>
    <style>
        /* BASE & SYSTEM STYLES */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            /* Crucial for preventing mobile horizontal scroll */
        }

        body {
            margin: 0;
            padding: 0;
            text-align: left;
            font-family: 'Cormorant', serif;
            background-color: #fff;
            overflow-x: hidden;
            /* Prevents unwanted layout shifts */
        }

        p,
        div {
            font-family: 'Nunito', Arial, sans-serif;
            line-height: 1.5;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'DM Serif Text', serif;
            margin-top: 0;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        /* FORM ELEMENTS */
        button {
            all: unset;
            border: 1px solid black;
            box-shadow: 2px 2px 0px black;
            border-radius: 8px;
            padding: 8px 16px;
            width: fit-content;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        button:hover {
            color: white;
            background-color: black;
            text-decoration: underline;
            box-shadow: none;
        }

        input,
        select {
            width: 100%;
            /* Default fluid width for mobile layout */
            max-width: 300px;
            background-color: transparent;
            font-size: 1rem;
            padding: 6px;
            margin: 8px 0;
            border: none;
            border-bottom: 1px solid black;
        }

        input:focus,
        select:focus {
            outline: none;
            border-bottom: 2px solid #312166;
        }

        /* SCROLL STRUCTURE */
        .scroll-container {
            height: 100vh;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
        }

        .panel {
            min-height: 100vh;
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            width: 100%;
        }

        .rsvp {
            background-image: url('./flower.png');
            background-size: 10%;

            /* background-repeat: no-repeat; */
            h2 {
                padding: 4px 16px;
                color: red;
                font-size: 3em;
                background-color: white;
                border: 1px solid red;
                border-radius: 8px;
            }
        }

        /* COMPONENT STYLES */
        .flowers {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            /* Keeps image scaling perfectly proportional */
        }

        .mika {
            width: 100%;
            max-width: 300px;
            height: auto;
            /* Fixes squished aspect ratio */
            border-radius: 8px;
            margin-top: 15px;
        }

        .event-container {
            width: 100%;
            max-width: 800px;
            /* Restricts width on large desktop screens */
            margin: 0 auto;
        }

        .container-header h1 {
            font-size: 3em;
            font-family: 'Cedarville Cursive', cursive;
        }

        .rsvp-form {
            border: 1px solid black;
            margin: 16px 0;
            padding: 20px;
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 8px;
        }

        .registration,
        .login {
            padding: 20px;
            margin: 40px auto;
            max-width: 400px;
            border: 1px solid black;
            box-shadow: 8px 8px 0px black;
            border-radius: 8px;
        }

        .modern-blob {
            display: grid;
            place-items: center;
            /* Centers both horizontally and vertically */
            height: 400px;
            aspect-ratio: 1;
            background: linear-gradient(45deg, #82dc87, #ffd9008f);
            /* Uses 8 values to create asymmetrical, organic fluid curves */
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            transition: border-radius 1s ease-in-out;
        }


        /* Dynamic shifting animation on hover */
        .modern-blob:hover {
            border-radius: 50% 50% 30% 70% / 50% 60% 40% 50%;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }

        /* DESKTOP MEDIA QUERY */
        @media (min-width: 768px) {
            .event-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                /* Side-by-side view on desktop */
                gap: 40px;
                align-items: center;
            }

            input,
            select {
                width: auto;
                /* Inline layout for desktop inputs */
                display: inline-block;
            }
        }

        .desc-invite {
            text-decoration: underline;
            text-decoration-color: #B3FD9A;
        }
    </style>
</head>

<body>
    <main class="scroll-container">
        @auth
            <!-- Panel 1: Hero Image -->
            <section class="panel" style="padding: 0;">
                <img src="{{ asset('meadow.jpg') }}" class="flowers" alt="Meadow flowers" />
            </section>

            <!-- Panel 2: Event Details -->
            <section class="panel">
                <div class="event-container">
                    <div class="container-header">
                        <h1>A Flowering 40th Celebration</h1>
                        <img class="mika" src="{{ asset('mika.png') }}" alt="Mika" />
                    </div>
                    <div>
                        <p class="desc-invite">You are cordially invited to Mika's Flowering Fortieth Solar's Return
                            Celebration Picnic.</p>
                        <div class="event-details">
                            <h3>Sunday, June 7th, 2026 | 4-7PM</h3>
                            <h4>
                                <a href="https://www.google.com/maps..." target="_blank">Humboldt Park Hill</a>
                                <br><br>Attire: Garden Party & Whatever Fancy Means to You
                            </h4>
                            <p>You are cordially invited to an afternoon for a luxe picnic in Humboldt park with vegan food
                                and delightful company.</p>
                            <p>We appreciate your support in celebrating the fortieth solar's return of Mika Muñoz.</p>
                            <p>Gluten free, nut free and low/no sugar options available </p>
                            <p>This event will be family friendly.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Panel 3: RSVP Form -->
            <section class="panel rsvp">
                <h2>RSVP</h2>
                <div class="rsvp-form">
                    <form action="create-rsvp" method="POST">
                        @csrf
                        <p>
                            <label prejudices="guest_name">My name is</label>
                            <input type="text" id="guest_name" name="guest_name" placeholder="name" />
                        </p>
                        <p>
                            <label prejudices="attending">and I am a</label>
                            <select name="attending" id="attending">
                                <option value="yes">yes</option>
                                <option value="maybe">maybe</option>
                                <option value="no">no</option>
                            </select>
                            <br />
                            for attending and I'm bringing <input type="number" id="plus_one" name="plus_one"
                                value="0" min="0" max="10" /> guests.
                        </p>
                        <button type="submit">Submit</button>
                        <p>save on <a target="_blank" href="https://calendar.app.google/hySxHQcaEXAyQgVF6">gcal</a></p>
                    </form>
                    <div>
                        <div>
                            <h4>{{ $rsvp_count }} current confirmed attendees <span class="dropdown"
                                    onclick="dropdown()">(click to see)</span></h4>
                            <div id="attendee-list" class="hide">
                                @foreach ($rsvps as $rsvp)
                                    <span>
                                        {{ $rsvp->guest_name }}
                                        {{ $rsvp->plus_one > 0 ? 'and ' . $rsvp->plus_one . ' guest(s)' : '' }} <br />
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <div class="modern-blob">
                <div class="login-form">
                    <h2>LOGIN TO RSVP</h2>
                    <form action="/onepw" method="POST">
                        @csrf
                        <input type="text" placeholder="name" name="onename">
                        <br />
                        <input type="password" placeholder="password" name="onepassword">
                        <br />
                        <button>Enter</button>
                    </form>
                </div>
            </div>
        @endauth
    </main>

    <script>
        function dropdown() {
            const list = document.getElementById('attendee-list');
            if (list) {
                list.classList.toggle('hide');
                list.classList.toggle('show');
            }
        }
    </script>
</body>

</html>
