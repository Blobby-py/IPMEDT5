<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcomeeeee</title>
</head>
<body>
    <h1>Welcome to the website!</h1>

    <p>Actieve gebruikers:</p>
    <ul>
        @foreach($activeUsers as $user)
            <li>{{ $user->ip_address }} ({{ $user->device_type }})</li>
        @endforeach
    </ul>

    <div id="current-user" data-active-users='@json($activeUsers)'>
        @if(count($activeUsers) > 0)
            <p>Aan de beurt: {{ $activeUsers[0]->ip_address }} ({{ $activeUsers[0]->device_type }})</p>
        @else
            <p>Er zijn geen actieve gebruikers.</p>
        @endif
    </div>

    <button id="next-user-btn">Volgende gebruiker</button>

    <p>Aantal dobbelstenen: <span id="dice-count">Laden...</span></p>

    <script src="{{ asset('js/userRotation.js') }}"></script>
</body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcomeeeee</title>
</head>
<body>
    <h1>Welcome to the website!</h1>

    <p>Actieve gebruikers:</p>
    <ul>
        @foreach($activeUsers as $user)
            <li>{{ $user->ip_address }} ({{ $user->device_type }})</li>
        @endforeach
    </ul>

    <div id="current-user" data-active-users='@json($activeUsers)'>
        @if(count($activeUsers) > 0)
            <p>Aan de beurt: {{ $activeUsers[0]->ip_address }} ({{ $activeUsers[0]->device_type }})</p>
        @else
            <p>Er zijn geen actieve gebruikers.</p>
        @endif
    </div>

    <button id="next-user-btn">Volgende gebruiker</button>

    <p>Aantal dobbelstenen: <span id="dice-count">Laden...</span></p>

    <script src="{{ asset('js/userRotation.js') }}"></script>
</body>
</html> -->