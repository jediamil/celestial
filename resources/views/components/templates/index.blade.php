 <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center hero-linear text-white relative overflow-hidden mb-10">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-0 bg-linear-to-t from-black/50 to-transparent"></div>
        
        <!-- Animated background elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-pulse"></div>
        <div class="absolute top-1/4 right-20 w-16 h-16 bg-white/10 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-1/3 left-1/4 w-12 h-12 bg-white/10 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <div class="mb-8">
                <h2 class="text-5xl md:text-7xl font-bold heading-font mb-6 text-shadow animate-fade-in">
                    Welcome to<br><span class="text-yellow-300">C.R.S Voyage</span>
                </h2>
                
                <p class="text-xl md:text-2xl mb-8 text-shadow max-w-2xl mx-auto leading-relaxed">
                    With C.R.S Voyage, Your travel dreams take flight
                </p>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 max-w-3xl mx-auto border border-white/20 shadow-2xl">
                    <p class="text-lg md:text-xl leading-relaxed">
                        Join us for extraordinary journeys that blend luxury, adventure, and unforgettable memories.
                    </p>
                </div>
            </div>
            
            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold px-8 py-4 rounded-lg transition duration-300 transform hover:-translate-y-1 shadow-lg">
                    Explore Destinations
                </a>
                <a href="#" class="bg-transparent border-2 border-white hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-lg transition duration-300 transform hover:-translate-y-1">
                    Customize Your Trip
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2">
            <div class="animate-bounce">
                <i class="fas fa-chevron-down text-white text-2xl"></i>
            </div>
        </div>
    </section>

    {{-- <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold heading-font text-gray-800 mb-4">Why Choose C.R.S Voyage?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We craft exceptional travel experiences tailored to your desires</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-linear-to-br from-blue-50 to-indigo-100 rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-crown text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold heading-font text-gray-800 mb-4">Luxury Experiences</h3>
                    <p class="text-gray-600">Indulge in premium accommodations, exclusive access, and personalized service at every destination.</p>
                </div>
                
                <div class="bg-linear-to-br from-amber-50 to-orange-100 rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="w-20 h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-compass text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold heading-font text-gray-800 mb-4">Adventure Awaits</h3>
                    <p class="text-gray-600">Discover hidden gems and embark on thrilling adventures curated by our expert travel designers.</p>
                </div>
                
                <div class="bg-linear-to-br from-emerald-50 to-teal-100 rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="w-20 h-20 bg-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold heading-font text-gray-800 mb-4">Unforgettable Memories</h3>
                    <p class="text-gray-600">Create lasting memories with unique experiences and moments that will stay with you forever.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination Preview -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold heading-font text-gray-800 mb-4">Featured Destinations</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Explore our handpicked selection of extraordinary locations</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-linear-to-br from-blue-400 to-purple-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold heading-font text-gray-800 mb-2">Santorini, Greece</h3>
                        <p class="text-gray-600 mb-4">White-washed buildings against the stunning Aegean Sea</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Explore →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-linear-to-br from-amber-400 to-orange-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold heading-font text-gray-800 mb-2">Kyoto, Japan</h3>
                        <p class="text-gray-600 mb-4">Ancient temples and serene gardens in the cultural heart</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Explore →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-linear-to-br from-emerald-400 to-teal-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold heading-font text-gray-800 mb-2">Bali, Indonesia</h3>
                        <p class="text-gray-600 mb-4">Tropical paradise with lush landscapes and vibrant culture</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Explore →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-linear-to-br from-purple-400 to-pink-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold heading-font text-gray-800 mb-2">Swiss Alps</h3>
                        <p class="text-gray-600 mb-4">Majestic mountains and pristine alpine landscapes</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Explore →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg transition duration-300">
                    View All Destinations
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-linear-to-r from-blue-800 to-indigo-900 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold heading-font mb-6">Ready to Begin Your Journey?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let us transform your travel dreams into reality with bespoke itineraries and unparalleled service.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold px-8 py-4 rounded-lg transition duration-300">
                    Contact Our Travel Experts
                </a>
                <a href="#" class="bg-transparent border-2 border-white hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-lg transition duration-300">
                    Download Brochure
                </a>
            </div>
        </div>
    </section> --}}

    