<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-blue-500 py-4 mb-8">
        <h1 class="text-white text-center text-2xl">Welcome to the website!</h1>
    </header>

    <section class="max-w-4xl mx-auto bg-white shadow-md p-6 rounded-md mb-8">
        <h2 class="text-xl font-semibold mb-4">Totaal aantal dobbelstenen</h2>
        <p class="text-lg">Totaal aantal dobbelstenen over: <span class="text-blue-500">{{ $totalOver }}</span></p>
        <p class="text-lg">Totaal aantal dobbelstenen in bak: <span class="text-red-500">{{ $totalBak }}</span></p>
    </section>

    <section class="max-w-4xl mx-auto bg-white shadow-md p-6 rounded-md mb-8">
        <h2 class="text-xl font-semibold mb-4">Actieve gebruikers:</h2>
        <ul>
            @foreach($activeUsers as $user)
                <li>{{ $user->ip_address }} ({{ $user->device_type }})</li>
            @endforeach
        </ul>
    </section>

    <section class="max-w-4xl mx-auto bg-white shadow-md p-6 rounded-md mb-8">
        <h2 class="text-xl font-semibold mb-4">Details per ESP32-apparaat:</h2>
        @foreach($activeUsers as $user)
            @if($user->device_type === 'esp32')
                @php
                    $espDevice = $esp32Devices->where('ip_address', $user->ip_address)->first();
                @endphp
                <div class="mb-4">
                    <h3 class="text-lg font-semibold">{{ $user->ip_address }} ({{ $user->device_type }})</h3>
                    @if($espDevice)
                        <p class="text-lg">Aantal dobbelstenen over: <span class="text-blue-500">{{ $espDevice->dobbelstenen_over }}</span></p>
                        <p class="text-lg">Aantal dobbelstenen in bak: <span class="text-red-500">{{ $espDevice->dobbelstenen_bak }}</span></p>
                    @else
                        <p class="text-lg">Dit apparaat heeft geen gegevens.</p>
                    @endif
                </div>
            @endif
        @endforeach
    </section>

</body>
</html>
