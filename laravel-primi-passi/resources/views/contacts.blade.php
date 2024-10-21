<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contacts') }}">Contacts</a>
    </nav>

    <h1>Contact List</h1>

    <ul>
        @foreach($contacts as $contact)
        <li>
            <strong>{{ $contact['name'] }}</strong>: {{ $contact['email'] }}
        </li>
        @endforeach
    </ul>
</body>

</html>