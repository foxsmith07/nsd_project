<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
    {{-- <style>
        body{
            background: linear-gradient(145deg,red 10%, #edf2f4 10% 85%, red 15%);
        }
    </style> --}}
</head>
<body>
    <div class=" min-vh-100" style="background: linear-gradient(145deg,red 10%, #edf2f4 10% 85%, red 15%);">
        <div class="container-fluid">
            <div class="row flex-column justify-content-center align-items-center">
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center align-items-center text-center">
                    <h1>Siamo stati contattati da un utente</h1>
                    <p>L'utente {{$content['name'] }} ci ha lasciato un messaggio</p>
                    <p>il mittente mail è {{$content['email']}} </p>
                    <p><strong>Oggetto:</strong> {{$content['object']}}</p>
                    <p><strong>Messaggio:</strong> <br> {{$content['body']}}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>