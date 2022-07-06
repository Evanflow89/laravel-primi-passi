<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage Laravel</title>
    <style>
        h1 {
            text-align: center;
            color: aqua;
            font-size: 15rem;
        }

        .container {
            width: 1000px;
            margin: auto;
        }

        ul {
            display: flex;
            list-style: none;
            justify-content: center;
            gap: 15px;
            margin: auto;
        }

        ul li a {
            font-size: 2rem;
            color: firebrick;
        }
    </style>
</head>
<body>
    <h1>Chi Siamo</h1>
    <div class="container">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/chi-siamo">Chi Siamo</a></li>
                <li><a href="/info">Info</a></li>
                <li><a href="/contatti">Contatti</a></li>
            </ul>
        </nav>

    </div>
</body>
</html>