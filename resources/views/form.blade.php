<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Log Oil Changes</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-50">
        <div class="w-1/2 p-4 rounded-md border border-gray-300">
            <form method="POST" action="{{ route('oil-changes.store') }}">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-4">
                        <h2 class="text-base/7 font-semibold text-gray-900">Oil Change Entry</h2>
                    </div>

                    @if ($errors->any())
                        <ul style="color: red">
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="current_odometer">Current Odometer</label>
                            <div class="mt-2">
                                <input type="number" id="c_odometer" name="current_odometer" value="{{ old('current_odometer') }}" required min="0" 
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm
                                    focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">   
                            <label for="previous_oil_change_date">Date of Previous Oil Change</label>
                            <div class="mt-2">
                                <input type="date" id="p_oil" name="previous_oil_change_date" value="{{ old('previous_oil_change_date') }}" required
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm
                                    focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="previous_odometer">Odometer at Previous Oil Change</label>
                            <div class="mt-2">
                                <input type="number" id="p_odometer" name="previous_odometer" value="{{ old('previous_odometer') }}" required min="0"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm
                                    focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </div>
                        </div>
                    </div>

                </div>
            

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Check</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>