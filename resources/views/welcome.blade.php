<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/portal.css">
    <!-- Styles -->
    <style>

    </style>
</head>

    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
          
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('filament.admin.auth.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
           

<body class="antialiased">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Send Email</h1>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('send-email') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="to">To:</label>
                        <input type="email" name="to" placeholder="Enter recipient email" class="form-control"
                            required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" placeholder="Enter subject" class="form-control" required>
                    </div>
                    <div class="form-group mb-5">
                        <label for="message">Message:</label>
                        <textarea name="message" placeholder="Enter message" class="form-control" required rows="30" cols="30"></textarea>
                    </div>
                    <button type="submit" class="btn app-btn-primary w-100">Send Email</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
