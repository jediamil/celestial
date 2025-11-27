<div>
    <div class="bg-cover bg-no-repeat bg-center w-full relative" style="background-image: url('{{ $headerBG }}')">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="flex flex-col lg:flex-row gap-12 items-center justify-between min-h-[77vh]">
                <!-- Left Content Section -->
                <div class="lg:w-1/2 h-full flex flex-col justify-center space-y-8">
                    <h3 class="text-5xl lg:text-7xl text-white font-bold leading-tight text-shadow-md">
                        {{ $firstSectionTitle }}
                    </h3>
                    <p class="text-gray-200 text-xl lg:text-2xl leading-relaxed max-w-3xl text-shadow-md">
                        {{ $firstSectionDescription }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mt-6">
                        <a href="#">
                            <button class="bg-pink-500 hover:bg-pink-600 px-8 py-4 rounded-lg text-white font-semibold text-lg cursor-pointer transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl min-w-[200px]">
                                Book Now!
                            </button>
                        </a>
                        <a href="#">
                            <button class="bg-transparent border-2 border-white hover:bg-white/20 px-8 py-4 rounded-lg text-white font-semibold text-lg cursor-pointer transition-all duration-300 transform hover:-translate-y-1 min-w-[200px]">
                                Learn More
                            </button>
                        </a>
                    </div>
                </div>
                
                <!-- Right Buttons Section -->
                <div class="lg:w-1/2 flex flex-col space-y-6 w-full max-w-md">
                    <a href="#">
                        <button class="w-full bg-pink-400/50 backdrop-blur-md border-2 border-white/30 hover:bg-white/20 hover:border-white/50 px-6 py-4 rounded-xl text-white font-medium cursor-pointer transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-between group">
                            <span>{{$firstSectionTitle}} Brochure</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </a>
                    <a href="#">
                        <button class="w-full bg-pink-400/50 backdrop-blur-md border-2 border-white/30 hover:bg-white/20 hover:border-white/50 px-6 py-4 rounded-xl text-white font-medium cursor-pointer transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-between group">
                            <span>Free Time for Photos</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </a>
                    <a href="#">
                        <button class="w-full bg-pink-400/50 backdrop-blur-md border-2 border-white/30 hover:bg-white/20 hover:border-white/50 px-6 py-4 rounded-xl text-white font-medium cursor-pointer transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-between group">
                            <span>Round-Trip Transportation</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </a>
                    <a href="#">
                        <button class="w-full bg-pink-400/50 backdrop-blur-md border-2 border-white/30 hover:bg-white/20 hover:border-white/50 px-6 py-4 rounded-xl text-white font-medium cursor-pointer transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-between group">
                            <span>Professional Tour Guide</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </a>
                    <a href="#">
                        <button class="w-full bg-pink-400/50 backdrop-blur-md border-2 border-white/30 hover:bg-white/20 hover:border-white/50 px-6 py-4 rounded-xl text-white font-medium cursor-pointer transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-between group">
                            <span>Special Events & Offers</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Itinerary and Offers Section -->
    <div>
        <div class="flex flex-row">
            <div class="flex-1 bg-pink-300 py-4 text-center">
                ITINERARY
            </div>
            <div class="flex-1 bg-blue-300 py-4 text-center">
                OFFERS AND DISCOUNTS
            </div>
        </div>

        <div class="flex flex-col lg:flex-row">
            <!-- Left Column - Itinerary -->
            <div class="flex-1">
                <div class="bg-linear-to-br from-blue-50 to-blue-100 p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Tour Itinerary</h2>
                    
                    <div class="space-y-8">
                        <!-- Day 1 -->
                        <div class="flex flex-col md:flex-row gap-6 items-start bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex">
                                <img src="{{ $secondSectionFirstDayImage }}" alt="Day 1" class="rounded-full w-24 h-24 md:w-32 md:h-32 object-cover border-4 border-blue-200">
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-blue-700 mb-3">{{ $secondSectionFirstDayTitle }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $secondSectionFirstDayDetails }}
                                </p>
                            </div>
                        </div>

                        <!-- Day 2 -->
                        <div class="flex flex-col md:flex-row gap-6 items-start bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex">
                                <img src="{{ $secondSectionSecondDayImage }}" alt="Day 2" class="rounded-full w-24 h-24 md:w-32 md:h-32 object-cover border-4 border-blue-200">
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-blue-700 mb-3">{{ $secondSectionSecondDayTitle }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $secondSectionSecondDayDetails }}
                                </p>
                            </div>
                        </div>

                        <!-- Day 3 -->
                        <div class="flex flex-col md:flex-row gap-6 items-start bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex">
                                <img src="{{ $secondSectionThirdDayImage }}" alt="Day 3" class="rounded-full w-24 h-24 md:w-32 md:h-32 object-cover border-4 border-blue-200">
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-blue-700 mb-3">{{ $secondSectionThirdDayTitle }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $secondSectionThirdDayDetails }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Packages -->
            <div class="flex-1">
                <div class="bg-linear-to-br from-pink-50 to-pink-100 p-8 shadow-lg h-full">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Tour Packages</h2>
                    
                    <div class="space-y-6">
                        <!-- Family Package -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <h3 class="text-xl font-bold text-pink-700 mb-4">{{ $familyPackageTitle }}</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Family Discounts: {{ $familyPackageDiscounts }}
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Free cancellation up to 48 hrs before
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Discounted hotel rates for extended stay
                                </li>
                            </ul>
                        </div>

                        <!-- Barkada Package -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <h3 class="text-xl font-bold text-pink-700 mb-4">{{ $barkadaPackageTitle }}</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Group Discount: {{ $barkadaPackageDiscount }}
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Flexible schedule to fit group plans
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Souvenir discounts & exclusive group photo ops
                                </li>
                            </ul>
                        </div>

                        <!-- Couple Package -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <h3 class="text-xl font-bold text-pink-700 mb-4">{{ $couplePackageTitle }}</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Complimentary rose or small gift for couples
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Professional photo session at Tokyo Tower
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Optional discounted dinner add-on (French/Japanese/Italian)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Packages Header -->
        <div class="flex flex-row">
            <div class="flex-1 bg-linear-to-r from-pink-500 to-purple-600 py-8 text-center">
                <h2 class="text-4xl font-bold text-white">{{ $thirdSectionHeaderTitle }}</h2>
                <p class="text-white/80 mt-2 text-lg">{{ $thirdSectionHeaderSubtitle }}</p>
            </div>
        </div>

        <!-- Family Package -->
        <div class="flex flex-col lg:flex-row bg-white">
            <div class="flex-1">
                <img src="{{ $familyPackageImage }}" alt="Family at Tokyo Tower" class="w-full h-full object-cover min-h-96">
            </div>
            <div class="flex-1 bg-gray-50 p-8">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">{{ $familyPackageTitle }}</h3>
                    
                    <h4 class="text-xl font-semibold text-pink-600 mb-4">What's Included:</h4>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Accommodation:</strong> {{ $familyPackageAccommodation }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Family Discounts:</strong> {{ $familyPackageDiscounts }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Tokyo Tower Admission:</strong> {{ $familyPackageAdmission }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Guided Tour:</strong> {{ $familyPackageGuide }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Transport:</strong> {{ $familyPackageTransport }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Meals:</strong> {{ $familyPackageMeals }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Extras:</strong> {{ $familyPackageExtras }}</span>
                        </li>
                    </ul>

                    <h4 class="text-xl font-semibold text-pink-600 mb-4">Flexible Booking:</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $familyPackageCancellation }}
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $familyPackageExtension }}
                        </li>
                    </ul>
                    
                    <button class="mt-8 bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">
                        Book Family Package
                    </button>
                </div>
            </div>
        </div>

        <!-- Barkada Package (Reversed) -->
        <div class="flex flex-col lg:flex-row-reverse bg-white border-t border-gray-200">
            <div class="flex-1">
                <img src="{{ $barkadaPackageImage }}" alt="Friends at Tokyo Tower" class="w-full h-full object-cover min-h-96">
            </div>
            <div class="flex-1 bg-gray-50 p-8">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">{{ $barkadaPackageTitle }}</h3>
                    
                    <h4 class="text-xl font-semibold text-purple-600 mb-4">Promo Highlights:</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Group Discount:</strong> {{ $barkadaPackageDiscount }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Admission Included:</strong> {{ $barkadaPackageAdmission }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Guided Tour:</strong> {{ $barkadaPackageGuide }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Transport:</strong> {{ $barkadaPackageTransport }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Extras:</strong> {{ $barkadaPackageExtras }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span><strong>Flexible Schedule:</strong> {{ $barkadaPackageSchedule }}</span>
                        </li>
                    </ul>
                    
                    <button class="mt-8 bg-purple-500 hover:bg-purple-600 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">
                        Book Barkada Package
                    </button>
                </div>
            </div>
        </div>

        <!-- Couple Package -->
        <div class="flex flex-col lg:flex-row bg-white border-t border-gray-200">
            <div class="flex-1">
                <img src="{{ $couplePackageImage }}" alt="Couple at Tokyo Tower" class="w-full h-full object-cover min-h-96">
            </div>
            <div class="flex-1 bg-gray-50 p-8">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">{{ $couplePackageTitle }}</h3>
                    
                    <h4 class="text-xl font-semibold text-red-500 mb-4">Afternoon / Early Evening:</h4>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackagePickup }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageTour }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageGift }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackagePhotos }}
                        </li>
                    </ul>

                    <h4 class="text-xl font-semibold text-red-500 mb-4">Sunset / Night:</h4>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageSunset }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-3 mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageDinner }}
                        </li>
                    </ul>

                    <h4 class="text-xl font-semibold text-red-500 mb-4">Dinner options include:</h4>
                    <ul class="space-y-2 text-gray-600 mb-6">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageDinnerFrench }}
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageDinnerJapanese }}
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageDinnerItalian }}
                        </li>
                    </ul>

                    <h4 class="text-xl font-semibold text-red-500 mb-4">After Dinner:</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageReturn }}
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $couplePackageNightWalk }}
                        </li>
                    </ul>
                    
                    <button class="mt-8 bg-red-500 hover:bg-red-600 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">
                        Book Romantic Package
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>