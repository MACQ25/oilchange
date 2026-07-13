<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Oil Changes</title>
</head>
<body>
    <h1>Oil Change Entry</h1>

    @if ($errors->any())
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('oil-changes.store') }}">
        @csrf
        <div>
            <label for="current_odometer">Current Odometer</label>
            <input type="number" id="c_odometer" name="current_odometer" value="{{ old('current_odometer') }} required">
        </div>

        <div>
            <label for="previous_oil_change_date">Date of Previous Oil Change</label>
            <input type="date" id="p_oil" name="previous_oil_change_date" value="{{ old('previous_oil_change_date') }}" required>
        </div>

        <div>
            <label for="previous_odometer">Odometer at Previous Oil Change</label>
            <input type="number" id="p_odometer" name="previous_odometer" value="{{ old('previous_odometer') }}" required>
        </div>

        <button type="submit">Check</button>
    </form>
</body>
</html>