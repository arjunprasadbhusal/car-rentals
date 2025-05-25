<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="relative h-screen bg-cover bg-center">
    <img src="hii.png.png" alt="Header Image" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto h-full flex flex-col justify-center items-center text-center text-black">
    <h1 class="text-4xl font-bold text-blue-500">Login</h1>
                <form action="{{route('login')}}" method="POST" class="mt-5 bg-blue-400 opactiy-50 px-4 py-4 rounded-lg ">
                    @csrf
                    <input type="email" name="email" placeholder="Email"
                    class="block w-full p-3 rounded-lg border-gray-400 mb-3">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <input type="password" name="password" placeholder="Password"
                    class="block w-full p-3 rounded-lg border-gray-400 mb-3">
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <p class="my-5 text-right text-black font-bold">
                    <a href="">Forgot Password ?</a>
                    </p>
                    <button type="submit" class=" bg-gray-300 text-black font-bold hover:bg-gray-400 p-3 w-full rounded-lg">
                        Login
                    </button>
                </form>
            </div>
</header>
</body>
</html>