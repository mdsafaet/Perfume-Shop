
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=AWSone:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-AWSone bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Perfume Shop</a>
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-gray-400">Home</a></li>
                <li><a href="#" class="hover:text-gray-400">About</a></li>
                <li><a href="#" class="hover:text-gray-400">Contact</a></li>
    
                @auth
                    <li class="hover:text-gray-400">  Welcome, {{ Auth::user()->name }} </li>
                    <li><a href="{{ route('account.logout') }}" class="hover:text-gray-400">Logout</a> </li>
                        
                @else
                    <li><a href="{{ route('account.register') }}" class="hover:text-gray-400">Register</a></li>
                    <li><a href="{{ route('account.login') }}" class="hover:text-gray-400">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>
    <!-- Hero Section -->
    <section>
        @yield('content1') 
   </section>

    <section>
         @yield('content') 
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-8 mt-16">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Perfume Shop. All rights reserved.</p>
            <div class="mt-4">
                <a href="#" class="text-gray-400 hover:text-gray-300 mx-3">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-gray-300 mx-3">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
