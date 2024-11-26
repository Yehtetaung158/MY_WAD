<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Number Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="max-w-md mx-auto">
        <div class="shadow-lg p-4 rounded-xl mt-5">
            <form action="{{ route('phone.store') }}" method="POST" class="flex flex-col space-y-6">
                @csrf
                <div class="flex flex-col my-2">
                    <label for="phone" class="text-gray-900 text-lg">phone</label>
                    <input type="tel" name="phone" id="phone" class="rounded-lg"
                        placeholder="Enter your phone number" required>
                </div>
                <div class="flex flex-col my-2">
                    <label for="person_id" class="text-gray-900 text-lg">Select a person</label>
                    <select name="person_id" id="person_id" class="rounded-lg">
                        @foreach ($persons as $person)
                            <option value="{{ $person->id }}">{{ $person->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="w-full py-2 bg-blue-500 rounded-lg mt-4 text-white text-lg">Create</button>
            </form>
        </div>
    </div>
</body>

</html>
