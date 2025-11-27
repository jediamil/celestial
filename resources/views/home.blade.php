<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    <style>
        .container {
            position: relative;
            width: 100%;
            max-width: 768px;
            min-height: 480px;
        }
        
        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }
        
        .sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }
        
        .container.active .sign-in {
            transform: translateX(100%);
        }
        
        .sign-up {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }
        
        .container.active .sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: move 0.6s;
        }
        
        @keyframes move {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }
        
        .toggle-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 150px 0 0 100px;
            z-index: 1000;
        }
        
        .container.active .toggle-container {
            transform: translateX(-100%);
            border-radius: 0 150px 100px 0;
        }
        
        .toggle {
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            height: 100%;
            color: #000;
            position: relative;
            left: -100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }
        
        .container.active .toggle {
            transform: translateX(50%);
        }
        
        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }
        
        .toggle-left {
            transform: translateX(-200%);
        }
        
        .container.active .toggle-left {
            transform: translateX(0);
        }
        
        .toggle-right {
            right: 0;
            transform: translateX(0);
        }
        
        .container.active .toggle-right {
            transform: translateX(200%);
        }
        
        @media (max-width: 768px) {
            .container {
                min-height: 600px;
            }
            
            .form-container {
                width: 100%;
                height: 50%;
            }
            
            .sign-in {
                top: 0;
            }
            
            .sign-up {
                top: 50%;
                opacity: 0;
            }
            
            .container.active .sign-up {
                transform: translateY(-100%);
                opacity: 1;
                z-index: 5;
            }
            
            .container.active .sign-in {
                transform: translateY(100%);
            }
            
            .toggle-container {
                top: 50%;
                left: 0;
                width: 100%;
                height: 50%;
                border-radius: 0 0 100px 100px;
            }
            
            .container.active .toggle-container {
                transform: translateY(-100%);
                border-radius: 100px 100px 0 0;
            }
            
            .toggle {
                top: -100%;
                left: 0;
                width: 100%;
                height: 200%;
            }
            
            .container.active .toggle {
                transform: translateY(50%);
            }
            
            .toggle-panel {
                width: 100%;
                height: 50%;
            }
            
            .toggle-left {
                transform: translateY(-200%);
            }
            
            .container.active .toggle-left {
                transform: translateY(0);
            }
            
            .toggle-right {
                top: 50%;
                transform: translateY(0);
            }
            
            .container.active .toggle-right {
                transform: translateY(200%);
            }
        }
    </style>
</head>

<body class="bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}');">
    <header>
        {{-- <nav class="navbar bg-transparent fixed w-full z-50 backdrop-blur-md border-b border-white/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <h2 class="logo text-2xl font-bold text-white tracking-wide">
                    <a href="#" class="hover:text-pink-200 transition duration-300 flex items-center">
                        <span class="bg-linear-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
                            Celestia Tours
                        </span>
                    </a>
                </h2>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <ul class="all-links flex space-x-8">
                    <li>
                        <a href="/" class="text-white hover:text-pink-200 transition duration-300 font-medium relative group">
                            Home
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pink-200 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard" class="text-white hover:text-pink-200 transition duration-300 font-medium relative group">
                            Destinations
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pink-200 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/packages" class="text-white hover:text-pink-200 transition duration-300 font-medium relative group">
                            Plan Your Trip
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pink-200 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                </ul>
                
                <!-- Auth Buttons -->
                <div class="auth-buttons flex items-center space-x-4 ml-4">
                    <a href="login.html" class="text-white hover:text-pink-200 transition duration-300 font-medium">
                        Log In
                    </a>
                    <a href="login.html" class="bg-linear-to-r from-pink-500 to-purple-500 text-white px-6 py-2.5 rounded-lg hover:from-pink-600 hover:to-purple-600 transition duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Sign Up
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden flex items-center space-x-4">
                <div class="auth-buttons flex items-center space-x-3">
                    <a href="login.html" class="text-white hover:text-pink-200 transition duration-300 text-sm">
                        Log In
                    </a>
                    <a href="login.html" class="bg-linear-to-r from-pink-500 to-purple-500 text-white px-4 py-1.5 rounded-lg hover:from-pink-600 hover:to-purple-600 transition duration-300 text-sm">
                        Sign Up
                    </a>
                </div>
                <input type="checkbox" id="menu-toggler" class="hidden">
                <label for="menu-toggler" class="cursor-pointer p-2 rounded-lg hover:bg-white/10 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px" class="transition duration-300">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                </label>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="lg:hidden">
            <div class="all-links-mobile hidden flex-col space-y-3 pb-6 pt-2 border-t border-white/20">
                <a href="/" class="text-white hover:text-pink-200 transition duration-300 py-2 px-4 rounded-lg hover:bg-white/5 font-medium">
                    Home
                </a>
                <a href="/dashboard" class="text-white hover:text-pink-200 transition duration-300 py-2 px-4 rounded-lg hover:bg-white/5 font-medium">
                    Destinations
                </a>
                <a href="/dashboard/packages" class="text-white hover:text-pink-200 transition duration-300 py-2 px-4 rounded-lg hover:bg-white/5 font-medium">
                    Plan Your Trip
                </a>
            </div>
        </div>
    </div>
</nav> --}}


<x-partials.navbar />

<script>
    // Mobile menu toggle functionality
    const menuToggler = document.getElementById('menu-toggler');
    const mobileMenu = document.querySelector('.all-links-mobile');
    
    menuToggler.addEventListener('change', function() {
        if (this.checked) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
        } else {
            mobileMenu.classList.remove('flex');
            mobileMenu.classList.add('hidden');
        }
    });
</script>
    </header>
    
    <div class="min-h-screen flex items-center justify-center px-4 pt-20 pb-10">
        <div class="container bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-4xl" id="container">
            <div class="form-container sign-up">
                <form class="bg-white flex flex-col items-center justify-center h-full px-8 md:px-12">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Create Account?</h1>
                    <input type="text" placeholder="Name" class="w-full px-4 py-3 mb-4 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-gray-100">
                    <input type="email" placeholder="Email" class="w-full px-4 py-3 mb-4 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-gray-100">
                    <input type="password" placeholder="Password" class="w-full px-4 py-3 mb-6 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-gray-100">
                    <span class="text-gray-500 text-sm mb-4">Or Sign Up With Social Media Platforms</span>
                    <div class="social-icons flex space-x-4 mb-6">
                        <a href="#" class="icon w-10 h-10 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition">
                            <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                    <button class="w-full bg-pink-500 text-white py-3 rounded-lg hover:bg-pink-600 transition font-semibold border border-pink-600">Sign Up</button>
                </form>
            </div>
            
            <div class="form-container sign-in">
                <form  action="{{ route('admin.dashboard') }}" class="bg-white flex flex-col items-center justify-center h-full px-8 md:px-12">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Sign In</h1>
                    <input type="email" placeholder="Email" class="w-full px-4 py-3 mb-4 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-gray-100">
                    <input type="password" placeholder="Password" class="w-full px-4 py-3 mb-6 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-gray-100">
                    <span class="text-gray-500 text-sm mb-4">Or Sign Up With Social Media Platforms</span>
                    <div class="social-icons flex space-x-4 mb-4">
                        <a href="#" class="icon w-10 h-10 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition">
                            <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                    <a href="#" class="text-pink-600 hover:text-pink-700 text-sm mb-6">Forget Your Password?</a>
                    <button class="w-full bg-pink-500 text-white py-3 rounded-lg hover:bg-pink-600 transition font-semibold border border-pink-600">Sign In</button>
                </form>
            </div>
            
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1 class="text-2xl md:text-3xl font-bold mb-4">Hello, Friend!</h1>
                        <p class="mb-6 text-sm md:text-base">Create your account to unlock exclusive features, stay updated, and enjoy a personalized experience. It's quick, easy, and free to get started!</p>
                        <button class="bg-transparent border-2 border-black text-black px-6 py-2 md:px-8 md:py-3 rounded-lg font-semibold hover:bg-black hover:text-white transition" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1 class="text-2xl md:text-3xl font-bold mb-4">Welcome Back, Friend!</h1>
                        <p class="mb-6 text-sm md:text-base">Please log in to your account to access your personalized dashboard, manage your settings, and continue where you left off. Your experience is just a click away.</p>
                        <button class="bg-transparent border-2 border-black text-black px-6 py-2 md:px-8 md:py-3 rounded-lg font-semibold hover:bg-black hover:text-white transition" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Login/Signup toggle functionality
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });

        // Mobile menu toggle functionality
        const menuToggler = document.getElementById('menu-toggler');
        const mobileMenu = document.querySelector('.all-links-mobile');
        
        menuToggler.addEventListener('change', function() {
            if (this.checked) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
            } else {
                mobileMenu.classList.remove('flex');
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
    