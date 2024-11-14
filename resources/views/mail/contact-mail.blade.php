<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact</title>
    </head>

    <body>
        <p>Vous avez reçu un nouveau mail de contact de : {{ $mailData['email'] }}</p>

        <p>Nom : {{ $mailData['lastname'] }}</p>

        <p>Prénom : {{ $mailData['firstname'] }}</p>

        <p>{{ $mailData['message'] }}</p>

        <p>Cordialement,</p>
    </body>

    </html>
