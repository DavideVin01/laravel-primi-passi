<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <h1>{{ $word }}</h1>
        <h2 class="text-gray">Benvenuti nel mio sito</h2>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('sitiweb') }}">Siti Web</a>
                </li>
                <li>
                    <a href="{{ route('chi-sono') }}">Chi sono</a>
                </li>
                <li>
                    <a href="{{ route('contatti') }}">Contatti</a>
                </li>
                <li>
                    <a href="{{ route('altro') }}">Altro</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .text-gray {
        color: gray;
    }

    body {
        font-family: sans-serif;
        height: 100h;
    }

    header {
        margin-top: 100px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    ul {
        display: flex;
    }

    ul li {
        list-style-type: none;
        padding: 0 30px;
        margin-top: 50px;
    }

    ul li a {
        text-decoration: none;
        font-size: 21px;
        text-transform: uppercase;
    }
</style>