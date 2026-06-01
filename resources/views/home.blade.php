<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <title>The Function - An RSVP Application</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        text-align: center;
        font-family: 'Cormorant';
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

    nav {
        position: absolute;
        right: 2px;
        top: 2px;
    }

    .event-details {
        height: 250px;
        width: 50%;
        border: 1px solid black;
        border-radius: 8px;
        margin: 8px;
        text-align: left;
        padding: 8px;
    }
    .rsvp-form {
        width: 25%;
        border: 1px solid black;
        border-radius: 8px;
        margin: 8px;
        text-align: right;
        padding: 8px;

    }
    .event-container {
        display: flex;
        justify-content: space-around;
    }
    .guest {
        margin: 0 auto;
        display: flex;
    }
</style>

<body>
    @auth
        <nav>
            <form action="/logout" method="POST">
                <button> Logout </button>
            </form>
        </nav>
        <h1>40</h1>
        <p>You are cordially invited to Mika's fortieth birthday celebration.</p>
        <div class="event-container">
            <div class="event-details">
                <h3>Sunday, June 7th</h3>
                <p>Description of event</p>
                <div>
                    <h4>Current confirmed attendees {{ $rsvp_count }}:</h4>
                    @foreach ($rsvps as $rsvp)
                        <p>
                            {{ $rsvp->user->name }} is coming.
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="rsvp-form">
                <form action="create-rsvp" method="POST">
                    @csrf
                    <h3><label for="attending">Attending?</label></h3>
                    <select name="attending" id="attending">
                        <option value="yes">yes</option>
                        <option value="maybe">maybe</option>
                        <option value="no">no</option>
                    </select>
                    <h3><label for="plus_one">Number of guests?</label></h3>
                    <input type="number" id="plus_one" name="plus_one" min="0" max="5">
                    <button> Save Response </button>
                </form>
            </div>
        </div>
        </div>
    @else
        <div class="guest">
            <div class="registration">
                <h2> Register</h2>
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" placeholder="name" name="name">
                    <input type="text" placeholder="email" name="email">
                    <input type="password" placeholder="password" name="password">
                    <br />
                    <button>Register</button>
                </form>
            </div>
            <h2> or </h2>
            <div class="login">
                <h2>Login </h2>
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" placeholder="email" name="loginemail">
                    <input type="password" placeholder="password" name="loginpassword">
                    <br />
                    <button>Login</button>
                </form>
            </div>
        </div>
    @endauth
</body>

</html>
