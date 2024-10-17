<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" w-full h-full">
    <div class=" w-3/5 mx-auto h-full shadow-lg rounded-xl">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase my-2 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Key
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4">ID</td>
                        <td class="px-6 py-4">{{$item->id}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Name</td>
                        <td class="px-6 py-4">{{$item->name}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Price</td>
                        <td class="px-6 py-4">{{$item->price}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Stock</td>
                        <td class="px-6 py-4">{{$item->stock}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Description</td>
                        <td class="px-6 py-4">{{$item->description}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Status</td>
                        <td class="px-6 py-4">{{$item->status}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Category ID</td>
                        <td class="px-6 py-4">{{$item->category_id}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Created At</td>
                        <td class="px-6 py-4">{{$item->created_at}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">Updated At</td>
                        <td class="px-6 py-4">{{$item->updated_at}}</td>
                    </tr>
                </tbody>
            </table>
            <a class=" m-4 bg-blue-600 px-4 py-2 rounded-lg text-white active:bg-blue-400"  href="{{route('item.index')}}">Back</a>
        </div>
    </div>
</body>

</html>
