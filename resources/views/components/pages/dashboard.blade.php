<x-layouts.app title="Dashboard" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">

    <span class="block text-gray-100 text-center w-full text-2xl font-semibold p-5">
        Selection of place interest
    </span>
    <div class="w-full flex flex-col md:flex-row gap-5 mb-5">
        <x-templates.card-template 
        title="Universal Studio" 
        description="film production company, Universal Pictures, or the theme park resorts, such as Universal Studios Hollywood or Universal Studios Florida"
        imgPath="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
        />

        <x-templates.card-template 
        title="N Seoul Tower" 
        description="The N Seoul Tower, officially the YTN Seoul Tower and a.k.a. Namsan Tower, is a communication and observation tower located on the summit of Namsan in central Seoul, South Korea."
        imgPath="{{ asset('images/N SEOUL TOWER.webp') }}"
        />

        <x-templates.card-template 
        title="Tokyo Tower" 
        description="Tokyo Tower, a.k.a. Japan Radio Tower is a communications and observation tower in the district of Shiba-koen in Minato, Tokyo, Japan, completed in 1958."
        imgPath="{{ asset('images/TOKYO TOWER COUPLE.webp') }}"
        />
    </div>

    <div class="w-full flex flex-col md:flex-row gap-5 mb-5">
        <x-templates.card-template 
        title="Botanical Garden" 
        description="Botanical garden is a garden that houses documented collections of living plants for scientific research, conservation, display, and education."
        imgPath="{{ asset('images/BOTANIC GARDEN.webp') }}"
        />

        <x-templates.card-template 
        title="Gyeongbokgung Palace" 
        description="Gyeongbokgung is a former royal palace in Seoul, South Korea. Established in 1395, it was the first royal palace of the Joseon dynasty, and is now one of the most significant tourist attractions in the country."
        imgPath="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
        />

        <x-templates.card-template 
        title="Akihabara" 
        description="Akihabara is a buzzing shopping hub famed for its electronics retailers, ranging from tiny stalls to vast department stores like Yodobashi Multimedia Akiba."
        imgPath="{{ asset('images/img_area_main_3.jpg') }}"
        />
    </div>

    <div class="w-full flex flex-col md:flex-row gap-5 mb-5">
        <x-templates.card-template 
        title="Gardens by the Bay" 
        description="The Gardens by the Bay is an urban park spanning 105 hectares in the Central Region of Singapore, adjacent to the Marina Reservoir."
        imgPath="{{ asset('images/Gardens-by-the-Bay-Singapore-worldering-around-18.jpg') }}"
        />

        <x-templates.card-template 
        title="Gwanghwamun Square" 
        description="Gwanghwamun Square, a.k.a. Gwanghwamun Plaza, is a public square located in Sejongno, Jongno-gu, Seoul, in front of Gyeongbokgung."
        imgPath="{{ asset('images/2658678_image2_1.jpg') }}"
        />

        <x-templates.card-template 
        title="Shibuya Crossing" 
        description="Shibuya Scramble Crossing, commonly known as Shibuya Crossing, is a scramble crossing in Shibuya, Tokyo, Japan. It is located near Shibuya Station in Shibuya, a major commercial and entertainment district in Tokyo"
        imgPath="{{ asset('images/image.jpg') }}"
        />
    </div>

    <div class="w-full flex flex-col md:flex-row gap-5 mb-5">
        <x-templates.card-template 
        title="Marina Bay" 
        description="Marina Bay is an upscale area of skyscrapers, posh hotels and luxury malls. It's known for the towering Singapore Flyer Ferris wheel and the flower conservatories and colourful Supertrees of Gardens by the Bay."
        imgPath="{{ asset('images/b160927061-banner-size.jpg') }}"
        />

        <x-templates.card-template 
        title="Itaewon" 
        description="Itaewon is a vibrant and multicultural district in Seoul, South Korea, well-known for its international restaurants, diverse nightlife, and unique shops."
        imgPath="{{ asset('images/1413122_720.jpg') }}"
        />

        <x-templates.card-template 
        title="Ueno Park" 
        description="Ueno Park is a spacious public park in the Ueno district of Taitō, Tokyo, Japan. The park was established in 1873 on lands formerly belonging to the temple of Kan'ei-ji."
        imgPath="{{ asset('images/ueno-cherry-blossom-GettyImages-1996449432.jpeg') }}"
        />
    </div>

    <div class="w-full flex flex-col md:flex-row gap-5 mb-5">
        <x-templates.card-template 
        title="cloud forest" 
        description="A cloud forest is a tropical or subtropical evergreen forest found in mountainous regions that is characterized by a persistent, low-level cloud cover at the canopy level."
        imgPath="{{ asset('images/cloud-forest-01.jpg') }}"
        />

        <x-templates.card-template 
        title="Bukhansan National Park" 
        description="The Bukhansan National Park in Seoul and Gyeonggi Province covers an area of 79.92 km² and was established on 2 April 1983."
        imgPath="{{ asset('images/da1ce6aa-c4d7-4fa7-bafe-d6eb09ad2ca0.webp') }}"
        />

        <x-templates.card-template 
        title="Sensō-ji" 
        description="Sensō-ji, is an ancient Buddhist temple in Asakusa, Tokyo, Japan. It is Tokyo's oldest-established temple, and one of its most significant. It is dedicated to Kannon, the bodhisattva of compassion."
        imgPath="{{ asset('images/sensoji-temple-asakusa-tokyo.jpg') }}"
        />
    </div>

</x-layouts.app>