<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <x-content.page-description>
        <x-slot:title>Aaron Edaku: Full stack developer </x-slot:title>
        <x-slot:description>Aaron Edaku is a skilled full stack developer based in Jinja, Uganda, with expertise in
            front-end and back-end web and mobile development. Get professional web solutions for your business with Dev
            Dakii.
            Contact now!
        </x-slot:description>
    </x-content.page-description>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,100&display=swap"
        rel="stylesheet">
    <link rel="preload" href="{{ secure_asset('/css/devdakii.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ secure_asset('/css/devdakii.css') }}">
    </noscript>

    <style>
        /*Reset*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
        }

        html {
            font-family: 'Roboto', sans-serif;
            width: 100%;
            font-size: 62.5%;
            overflow-x: hidden;
        }

        body {
            font-size: 1.6rem;
            min-height: 100vh;
            min-width: 300px;
            max-width: 100%;
            margin: 0 auto;
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(183, 153, 255);
            overflow-x: hidden;
        }
    </style>

</head>

<body>
    <x-content.header></x-content.header>
    <x-content.main>

    </x-content.main>
    <x-content.footer></x-content.footer>
    <script src="/js/dakii.js"></script>
</body>

</html>
