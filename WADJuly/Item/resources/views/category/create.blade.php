<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="max-w-md mx-auto">
        <div class=" shadow-lg p-4 rounded-xl mt-5">
            <form action="{{ route('category.store') }}" method="POST" class=" flex flex-col space-y-6">
                @csrf
                <div class=" flex flex-col my-2 ">
                    <label for="name" class=" text-gray-900 text-lg ">Name</label>
                    <input type="text" name="name" id="name" class=" rounded-lg @error('name')
                        border-red-500
                    @enderror"  value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                    @enderror
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="description" class=" text-gray-900 text-lg ">Description</label>
                    <textarea name="description" id="description" class="rounded-lg @error('description')
                        border-red-500
                    @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button class=" w-full py-2 bg-blue-500 rounded-lg mt-4 text-white text-lg">Create </button>
            </form>
        </div>
    </div>


</body>

</html>
