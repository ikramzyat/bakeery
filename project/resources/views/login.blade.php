<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body> 
    @include('partials.status')
    <div class="container ">
        <div class="row main d-flex  justify-content-between align-items-center">
            <div class="col-md-12 text-end">
                <a href="/">home</a>
            </div>
            <div class="col-md-6 d-none d-md-block text-center">
                <img class="login" src="/storage/images/login.png" alt="">
            </div>
           
            <div class="col-md-6 text-center" >
                <h1 class="text-primary">Se connecter</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div>
                        <input type="text" class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="login" name="login">
                        @error('login')
                            <div class="text-pink-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-3">
                        <input type="password" class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="password" name="password">
                        @error('password')
                            <div class="text-pink-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-outline-secondary">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
