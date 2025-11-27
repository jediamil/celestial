<x-layouts.app title="Dashboard" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">

    <span class="block text-gray-100 text-center w-full text-2xl font-semibold p-5">
        Package of place interest
    </span>
    
    <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-6 mb-5 px-4">
        <!-- Universal Studio Card -->
        <div class="flex flex-col bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
            <x-templates.card-template 
                title="Universal Studio" 
                description="film production company, Universal Pictures, or the theme park resorts, such as Universal Studios Hollywood or Universal Studios Florida"
                imgPath="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            />
            <div class="p-4 mt-auto">
                <a href="/dashboard/package/universal" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                    View Universal Studio Packages
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Gyeongbokgung Palace Card -->
        <div class="flex flex-col bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
            <x-templates.card-template 
                title="Gyeongbokgung Palace" 
                description="Gyeongbokgung is a former royal palace in Seoul, South Korea. Established in 1395, it was the first royal palace of the Joseon dynasty, and is now one of the most significant tourist attractions in the country."
                imgPath="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            />
            <div class="p-4 mt-auto">
                <a href="/dashboard/package/gyeongbokgung" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                    View Palace Tour Packages
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Tokyo Tower Card -->
        <div class="flex flex-col bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
            <x-templates.card-template 
                title="Tokyo Tower" 
                description="Tokyo Tower, a.k.a. Japan Radio Tower is a communications and observation tower in the district of Shiba-koen in Minato, Tokyo, Japan, completed in 1958."
                imgPath="{{ asset('images/TOKYO TOWER COUPLE.webp') }}" 
            />
            <div class="p-4 mt-auto">
                <a href="/dashboard/package/tokyo-tower" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                    View Tokyo Tower Packages
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-layouts.app>