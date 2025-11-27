<x-layouts.app title="Dashboard" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">
    <div>
        <x-templates.package-template 
    {{-- First section of content --}}
    headerBG="{{ asset('images/1413122_720.jpg') }}"
    firstSectionTitle="Tokyo Tower"
    firstSectionDescription="Tokyo Tower is famous for its Eiffel-inspired design, panoramic city views, night illumination, cultural significance, and attractions, making it a must-visit Tokyo landmark."

    {{-- Second section of content | Left column --}}
    secondSectionFirstDayImage="{{ asset('images/1413122_720.jpg') }}"
    secondSectionFirstDayTitle="Day 1: Arrival in Tokyo"
    secondSectionFirstDayDetails="On Day 1, you will arrive in Tokyo and check in at your 3-star hotel with free Wi-Fi and breakfast included. After settling in, you will meet your guide for a short orientation walk nearby, and in the evening, you will have free time to explore local shops and enjoy dinner at your leisure."
    
    secondSectionSecondDayImage="{{ asset('images/1413122_720.jpg') }}"
    secondSectionSecondDayTitle="Day 2: Tokyo Tower Exploration"
    secondSectionSecondDayDetails="On Day 2, experience the iconic Tokyo Tower with guided tours, observation deck access, and cultural exhibits. Enjoy panoramic city views and learn about Tokyo's history and architecture from our expert guides."
    
    secondSectionThirdDayImage="{{ asset('images/1413122_720.jpg') }}"
    secondSectionThirdDayTitle="Day 3: Cultural Experience & Departure"
    secondSectionThirdDayDetails="On Day 3, immerse yourself in Japanese culture with traditional activities before departure. Enjoy a farewell breakfast and convenient transportation to the airport for your journey home."

    {{-- Third section of content | Packages --}}
    thirdSectionHeaderTitle="TOKYO TOWER PACKAGES"
    thirdSectionHeaderSubtitle="Choose Your Perfect Tokyo Experience"

    {{-- Family Package --}}
    familyPackageImage="{{ asset('images/1413122_720.jpg') }}"
    familyPackageTitle="Tokyo Tower Family Tour Package"
    familyPackageAccommodation="Comfortable 3-star hotel stay for 2 nights with free Wi-Fi and breakfast"
    familyPackageDiscounts="Special rates for families of 3 or more (up to 20% off)"
    familyPackageAdmission="Tickets to Main Deck and Top Deck for the whole family"
    familyPackageGuide="English-speaking guide providing fun and educational insights"
    familyPackageTransport="Round-trip private transfer from hotel to Tokyo Tower and back"
    familyPackageMeals="Daily breakfast plus one family-friendly lunch near the tower"
    familyPackageExtras="Access to FootTown shops, restaurants, and souvenir discounts"
    familyPackageCancellation="Free cancellation up to 48 hours before the tour"
    familyPackageExtension="Option to extend stay with discounted hotel rates"

    {{-- Barkada Package --}}
    barkadaPackageImage="{{ asset('images/1413122_720.jpg') }}"
    barkadaPackageTitle="Tokyo Tower Barkada Promo"
    barkadaPackageDiscount="Book with 4 or more friends and get 15% off total tour price"
    barkadaPackageAdmission="Main Deck and Top Deck access for all group members"
    barkadaPackageGuide="Fun, engaging English-speaking guide to keep the vibes high"
    barkadaPackageTransport="Round-trip shuttle from designated pick-up points for hassle-free travel"
    barkadaPackageExtras="Group selfie spots, souvenir discounts, and exclusive photo ops at the tower"
    barkadaPackageSchedule="Choose preferred tour date and time to fit your barkada's plans"

    {{-- Couple Package --}}
    couplePackageImage="{{ asset('images/1413122_720.jpg') }}"
    couplePackageTitle="Tokyo Tower Couple Romantic Itinerary"
    couplePackagePickup="Pick-up from your hotel and transfer to Tokyo Tower"
    couplePackageTour="Private guided tour of Main Deck and Top Deck, enjoying panoramic city views"
    couplePackageGift="Complimentary rose or small gift to celebrate your visit"
    couplePackagePhotos="Professional couple's photo session with the tower as a stunning backdrop"
    couplePackageSunset="Watch the sunset from the observation deck, then see the tower's magical illumination"
    couplePackageDinner="Transfer to a nearby romantic restaurant (optional dinner add-on)"
    couplePackageDinnerFrench="French cuisine with a view of Tokyo Bay"
    couplePackageDinnerJapanese="Traditional Japanese kaiseki for an authentic dining experience"
    couplePackageDinnerItalian="Cozy Italian trattoria perfect for sharing a bottle of wine"
    couplePackageReturn="Return transfer to your hotel"
    couplePackageNightWalk="Option for a short night walk around the illuminated Tokyo Tower area"
/>
    </div>
</x-layouts.app>