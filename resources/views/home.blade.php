<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=DM+Serif+Text:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <title>The Function - An RSVP Application</title>
</head>
<script>
    function dropdown() {
        console.log("...")
        const hidden = document.getElementById('attendee-list').classList.contains('hide')
        if (hidden) {
            document.getElementById('attendee-list').classList.remove('hide')
            document.getElementById('attendee-list').classList.add('show')
        } else {
            document.getElementById('attendee-list').classList.remove('show')
            document.getElementById('attendee-list').classList.add('hide')
        }
    }
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        text-align: left;
        font-family: 'Cormorant';
          display: grid;
  place-items: center; /* Centers both horizontally and vertically */
    }

    p,
    div {
        font-family: 'Nunito', Arial;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'DM Serif Text', serif;
    }

    h1 {
        font-size: 2.5em;
    }

    h2 {
        font-size: 2em;
    }

    button {
        all: unset;
        border: 1px solid black;
        box-shadow: 2px 2px 0px black;
        border-radius: 8px;
        padding: 8px;
        width: fit-content;
    }

    input,
    select {
        width: fit-content;
    }

    input {
        background-color: transparent;
    }

    button:hover {
        color: white;
        background-color: black;
        text-decoration: underline;
        box-shadow: none;
    }

    .registration,
    .login {
        padding: 10px;
        margin: 0px auto;
        width: fit-content;
        border: 1px solid black;
        box-shadow: 8px 8px 0px black;
        border-radius: 8px;
    }

    input {
        margin: 8px;
        font-size: 1em;
        padding: 4px;
        border: none;
        border-bottom: 1px solid black;
    }

    select {
        width: fit-content;
    }

    .center {
        display: flex;
    }

    footer {
        width: 100%;

        button {
            all: unset;
            padding: 8px;
        }
    }

    .event-details {
        text-align: left;
    }

    .rsvp-form {
        border: 1px solid black;

        margin: 8px;
        text-align: left;
        padding: 8px;
        overflow-y: scroll;
    }

    .event-container {
        margin: 50px;

        >div {
            margin-top: 20px;
        }
    }

    .guest {
        margin: 0 auto;
        display: flex;
    }

    a:visited,
    a {
        color: black;
    }

    a:hover {
        text-decoration: underline;
    }

    button.dropdown {
        all: unset;
    }

    .hide {
        display: none;
    }

    .show {
        display: block;
    }

    .abstract-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 600px;
        height: 600px;
        transform: translate(-50%, -50%);
        z-index: -1;
        /* Pushes the SVG behind the HTML */
        pointer-events: none;
        /* Allows clicks to pass through the background */
    }

    button.scroll-button {
        position: absolute;
        top: 50%;
        left: 20px;
        text-align: left;
        z-index: 1;
        background-color: white;
        font-size: 24px;
    }

    .mika {
        height: 300px;
    }

    .registration {
        margin: 200px 0;
    }

    .modern-blob {
        display: grid;
        place-items: center;
        /* Centers both horizontally and vertically */
        height: 100vh;
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

    @media (max-width: 500px) {
        .rsvp-form {
            max-height: 400px;
        }

        .event-container {
            margin: 16px;
        }

        .event-details {
            height: 90vh;
            margin: 0px;

            p {
                font-size: 1.5em;
                margin: 4px;
            }
        }

        .registration {
            width: 75%;
            margin: 200px auto;
        }
    }

    .flowers {
        height: 100vh;
    }

    .scroll-container {
        height: 100vh;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
    }

    .panel {
        height: 100vh;
        scroll-snap-align: start;
        /* Snaps to the top edge of each section */
    }

    .container-header {
        h1 {
            color: #312166;
            text-align: left;
        }
    }

    .panel {
        border-radius: 8px;
    }

    .login-form {
        button {
            margin-top: 16px;
        }
    }
</style>

<body>
    <main class="scroll-container">
        @auth
            <section class="panel">
                <img src="{{ asset('meadow.jpg') }}" class="flowers" />
                {{-- <button class="scroll-button">scroll down</button> --}}
            </section>
            <section class="panel">
                <div class="event-container">
                    <div class="container-header">
                        <h1>A Flowering 40th Celebration</h1>
                        <div> <img class="mika" src="{{ asset('mika.png') }}" /></div>
                    </div>
                    <p>You are cordially invited to Mika's Flowering Fortieth Solar Return Celebration Picnic.</p>
                    <div class="event-details">
                        <h3>Sunday, June 7th, 2026 | 4-7PM</h3>
                        <h4><a href="https://www.google.com/maps?client=firefox-b-1-d&hs=tgf&sca_esv=a708274f6968f4df&output=search&q=humboldt+park+hill&source=lnms&fbs=ADc_l-aN0CWEZBOHjofHoaMMDiKpaEWjvZ2Py1XXV8d8KvlI3hg2cLua8k0b5ikl_6e-_EuCrJXF2omMOMbPtXIscilQlfTWJ4o6kRAc14Hx65kj5RE041e1qFN3cBDm91PRkIOJUMqlW4TDSQK7aOtODtHveWicH-qCAxHyWegcz7AcltgLBzEPuCnVjclgrz6ZE-iQ6Af91m5khPA3h2c9PF5Mc67XLw&entry=mc&ved=1t:200715&ictx=111"
                                target="_blank">Humboldt Park Hill</a> / Attire: Garden Party & Whatever Fancy Means to You
                        </h4>
                        <p>You are cordially invited to an afternoon for a luxe picnic in Humboldt park with food and
                            delightful
                            company. <br />We appreciate your support in celebrating the fortieth solar return of Mika
                            Muñoz.
                        </p>
                        <p>This event will be family friendly.</p>
                    </div>
            </section>
            <section class="panel">
                <h2>RSVP</h2>
                <div class="rsvp-form">
                    <form action="create-rsvp" method="POST">
                        @csrf
                        <p>My name is: <input type="text" id="guest_name" name="guest_name" /></p>
                        and I<label for="attending"> am a</label>
                        <select name="attending" id="attending">
                            <option value="yes">yes</option>
                            <option value="maybe">maybe</option>
                            <option value="no">no</option>
                        </select>
                        in attendance to <br /> Mika's Flowering Fortieth Solar Return Celebration Picnic. <br />
                        I will be bringing<label for="plus_one"></label>
                        <input type="number" placeholder="1" id="plus_one" name="plus_one" min="0" max="5">
                        guests.
                        <br />
                        <button> RSVP </button>
                    </form>
                    <p><a target="_blank" href="https://calendar.app.google/QppcTTaLBDpx5ccc7">Add to Google Calendar</a>
                    </p>
                    <div class="attendee-container">
                        <div>
                            <h4>{{ $rsvp_count }} current confirmed attendees <button class="dropdown"
                                    onclick="dropdown()">›</button></h4>
                            <div id="attendee-list" class="hide">
                                @foreach ($rsvps as $rsvp)
                                    <p>
                                        {{ $rsvp->guest_name }}
                                    </p>
                                @endforeach
                            </div>
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
                        <br/>
                        <input type="password" placeholder="password" name="onepassword">
                        <br />
                        <button>Enter</button>
                    </form>
                </div>
            </div>
        @endauth
    </main>
</body>

</html>
