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
    {{-- {{$item}} --}}
    <div class="max-w-md mx-auto">
        <div class=" shadow-lg p-4 rounded-xl mt-5">
            <form action="{{ route('item.update',$item->id) }}" method="POST" class=" flex flex-col space-y-6">
                @csrf
                @method('PUT')
                <div class=" flex flex-col my-2 ">
                    <label for="name" class=" text-gray-900 text-lg ">Name</label>
                    <input value="{{$item->name}}" type="text" name="name" id="name" class=" rounded-lg ">
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="price" class=" text-gray-900 text-lg ">Price</label>
                    <input value="{{$item->price}}" type="text" name="price" id="price" class=" rounded-lg ">
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="stock" class=" text-gray-900 text-lg ">Stock</label>
                    <input value="{{$item->stock}}" type="text" name="stock" id="stock" class=" rounded-lg ">
                </div>
                <div class=" flex flex-col my-2 ">
                    <label for="description" class=" text-gray-900 text-lg ">Description</label>
                    <textarea  name="description" id="description" class="rounded-lg">{{$item->description}}</textarea>
                </div>
                <button class=" w-full py-2 bg-blue-500 rounded-lg mt-4 text-white text-lg">Update</button>
            </form>
        </div>
    </div>


</body>

</html>
