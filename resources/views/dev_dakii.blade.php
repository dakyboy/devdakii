<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <x-content.page-description>
        <x-slot:title>Dev Dakii: Full stack developer </x-slot:title>
        <x-slot:description>Dev Dakii is a skilled full stack developer based in Jinja, Uganda, with expertise in
            front-end and back-end web and mobile development. Get professional web solutions for your business with Dev
            Dakii.
            Contact now!</x-slot:description>
    </x-content.page-description>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,100&display=swap"
        rel="stylesheet">

    <style>
        /*Reset*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-family: 'Roboto', sans-serif;
            min-height: 100%;
            font-size: 62.5%;
            min-width: 90%;
            margin: 0 auto;

        }

        body {
            font-size: 1.6rem;
            min-height: 100vh;
            min-width: 300px;
            margin: 0vh auto;
            background-color: rgb(3, 70, 148);
            color: #ffffff;
        }

        .app-container {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            align-items: center;
        }
    </style>

</head>

<body class="app-container">
<x-content.header ></x-content.header>
<x-content.main >
    
</x-content.main>
<x-content.footer ></x-content.footer>
</body>

</html>
