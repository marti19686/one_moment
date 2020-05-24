<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>One Moment - Waiting For the Unknown</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body
            {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: #000000;
            }
            p
            {
                position: relative;
                font-family: 'Bitter', serif;
                font-size: 4em;
                letter-spacing: 4px;
                overflow: hidden;
                background: linear-gradient(90deg, #000000, #ffffff, #000000);
                background-size: 80%;
                background-repeat: no-repeat;
                animation: animate 3s linear infinite;
                -webkit-background-clip: text;
                -webkit-text-fill-color: rgba(255,255,255,0);

            }
            @keyframes animate {
                0%
                {
                    background-position: -500%;
                }
                100%
                {
                    background-position: 500%;
                }

            }
        </style>
    </head>
    <body>
        <p>Waiting For the Unknown</p>
    </body>
</html>
