<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Entry #{{$oilChange -> id}} </title>
</head>
<body>
    <div class="min-h-screen flex items-start justify-center bg-gray-50 pt-16">
        <div class="w-1/2">
            <div class="border-b border-gray-900/10 pb-4">
                <h2 class="text-base/7 font-semibold text-gray-900 text-center">Oil Change Entry #{{ $oilChange -> id }}</h2>
            </div>
            <div>
                <table class="w-1/1 table-auto border-collapse border border-gray-400 p-4">
                    <thead>
                        <th class="border border-gray-300 p-4 text-start">Field</th>
                        <th class="border border-gray-300 p-4 text-end">Value</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 p-4">Oil Change Required?</td>
                            @if ($oilChange -> needsOilChange())
                                <td class="border border-gray-300 text-end p-4 bg-red-500">An oil change is recommended</td>
                            @else
                                <td class="border border-gray-300 text-end p-4 bg-green-500">No oil change is needed currently</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-4">Current Odometer Count</td>
                            <td class="border border-gray-300 text-end p-4">{{$oilChange -> current_odometer}} km</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-4">Previous Oil Change</td>
                            <td class="border border-gray-300 text-end p-4">{{$oilChange -> previous_oil_change_date}}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-4">Previous Odometer Count</td>
                            <td class="border border-gray-300 text-end p-4">{{$oilChange -> previous_odometer}} km</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 text-end p-5" colspan="2">
                                <a href="{{route('home')}}" 
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    ← Go Back
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

