<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: "Afacad Flux", sans-serif;
        }

        table {
            margin-top: 5%;
            border-collapse: collapse;
            width: 100vw;
        }

        td,
        th {
            text-align: center;
            padding: 8px;
        }

        img {
            width: 15vw;
            height: 15vh;
        }

        .list-item {
            display: flex;
            flex-direction: row;
            gap: 3em;
            justify-content: left;
            align-items: center;
        }

        .button-style {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .button-style:hover {
            background-color: #45a049;
        }

        .button-style:active {
            background-color: #3e8e41;
        }

        .eliminar {
            background-color: rgb(176, 0, 0)
        }

        input {
            margin: 20px 0;
            width: 40%;
            padding: 10px;
        }

        .input-fields {
            display: flex;
            flex-direction: column;
        }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        @yield('content')
    </div>
</body>

</html>