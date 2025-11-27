<nav class="navbar bg-transparent fixed w-full z-50 backdrop-blur-md border-b border-white/20">
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
                            Trip Package
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pink-200 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/plan" class="text-white hover:text-pink-200 transition duration-300 font-medium relative group">
                            Plan Your Trip
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pink-200 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                </ul>
                
                <!-- Auth Buttons -->
                <div class="auth-buttons flex items-center space-x-4 ml-4">
                    <a href="/login" class="text-white hover:text-pink-200 transition duration-300 font-medium">
                        Log In
                    </a>
                    <a href="#" class="bg-linear-to-r from-pink-500 to-purple-500 text-white px-6 py-2.5 rounded-lg hover:from-pink-600 hover:to-purple-600 transition duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Sign Up
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden flex items-center space-x-4">
                <div class="auth-buttons flex items-center space-x-3">
                    <a href="/login" class="text-white hover:text-pink-200 transition duration-300 text-sm">
                        Log In
                    </a>
                    <a href="#" class="bg-linear-to-r from-pink-500 to-purple-500 text-white px-4 py-1.5 rounded-lg hover:from-pink-600 hover:to-purple-600 transition duration-300 text-sm">
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
</nav>

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