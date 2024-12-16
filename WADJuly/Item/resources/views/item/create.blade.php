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
            <form action="{{ route('item.store') }}" method="POST" class=" flex flex-col space-y-6" enctype="multipart/form-data">
                @csrf
                <div class=" flex flex-col my-2 ">
                    <label for="name" class=" text-gray-900 text-lg ">Name</label>
                    <input type="text" name="name" id="name" class=" rounded-lg ">
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="price" class=" text-gray-900 text-lg ">Price</label>
                    <input type="text" name="price" id="price" class=" rounded-lg ">
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="stock" class=" text-gray-900 text-lg ">Stock</label>
                    <input type="text" name="stock" id="stock" class=" rounded-lg ">
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="description" class=" text-gray-900 text-lg ">Description</label>
                    <textarea name="description" id="description" class="rounded-lg"></textarea>
                </div>

                <div class=" w-full mx-auto">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        Category</label>
                    <select name="categories" id="categories"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}" selected>  {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="image" class=" text-gray-100 text-lg ">Image</label>
                    <input type="file" name="image[]" id="image" class="rounded-lg" multiple>
                </div>

                <div class=" flex flex-col my-2 ">
                    <div class="flex items-center mb-4">
                        <input id="disabled-radio-1" type="radio" value="availabel" name="status"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="disabled-radio-1"
                            class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Availabel</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="disabled-radio-2" type="radio" value="unavailabel" name="status"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="disabled-radio-2"
                            class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Unavailabel</label>
                    </div>
                </div>
                <button type="submit" class=" active:bg-blue-300 w-full py-2 bg-blue-500 rounded-lg mt-4 text-white text-lg">Create </button>
            </form>
        </div>
    </div>


</body>

</html>
