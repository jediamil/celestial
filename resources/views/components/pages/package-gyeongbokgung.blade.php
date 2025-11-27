<x-layouts.app title="Gyeongbokgung Palace" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">
    <div>
        <x-templates.package-template 
            {{-- First section of content --}}
            headerBG="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            firstSectionTitle="Gyeongbokgung Palace"
            firstSectionDescription="Gyeongbokgung Palace, the main royal palace of the Joseon dynasty, stands as a magnificent symbol of Korean history and architecture. Experience the grandeur of traditional Korea with its stunning pavilions, throne hall, and changing of the guard ceremony."

            {{-- Second section of content | Left column --}}
            secondSectionFirstDayImage="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            secondSectionFirstDayTitle="Day 1: Arrival in Seoul & Palace Introduction"
            secondSectionFirstDayDetails="On Day 1, you will arrive in Seoul and check into your traditional Hanok-style accommodation or 4-star hotel. After settling in, meet your guide for an orientation walk around the palace grounds and enjoy a welcome dinner featuring authentic Korean royal cuisine."
            
            secondSectionSecondDayImage="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            secondSectionSecondDayTitle="Day 2: Gyeongbokgung Palace Exploration"
            secondSectionSecondDayDetails="On Day 2, experience the full grandeur of Gyeongbokgung Palace. Witness the majestic Changing of the Guard ceremony, explore the National Palace Museum, and enjoy a guided tour of Geunjeongjeon (Throne Hall) and Gyeonghoeru Pavilion. Participate in a traditional Hanbok wearing experience."
            
            secondSectionThirdDayImage="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            secondSectionThirdDayTitle="Day 3: Cultural Immersion & Departure"
            secondSectionThirdDayDetails="On Day 3, immerse yourself in Korean culture with traditional tea ceremony at a nearby teahouse, visit Bukchon Hanok Village, and enjoy a farewell lunch of Korean barbecue. Depart with beautiful memories and traditional souvenirs."

            {{-- Third section of content | Packages --}}
            thirdSectionHeaderTitle="GYEONGBOKGUNG PALACE PACKAGES"
            thirdSectionHeaderSubtitle="Experience Traditional Korean Royalty"

            {{-- Family Package --}}
            familyPackageImage="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            familyPackageTitle="Gyeongbokgung Palace Family Heritage Tour"
            familyPackageAccommodation="Traditional Hanok stay or 4-star hotel for 2 nights with Korean breakfast"
            familyPackageDiscounts="Family special: Children under 12 free, 15% off for families of 4+"
            familyPackageAdmission="Priority access to Gyeongbokgung Palace and all included museums"
            familyPackageGuide="Bilingual guide specializing in family-friendly historical tours"
            familyPackageTransport="Private van with palace-area access and all transfers"
            familyPackageMeals="Daily Korean breakfast, one royal court lunch, and welcome dinner"
            familyPackageExtras="Traditional Hanbok rental for family photos, souvenir discount at palace gift shop"
            familyPackageCancellation="Free cancellation up to 72 hours before the tour"
            familyPackageExtension="Optional extension to nearby palaces (Changdeokgung, Changgyeonggung)"

            {{-- Cultural Package --}}
            barkadaPackageImage="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            barkadaPackageTitle="Korean Cultural Immersion Package"
            barkadaPackageDiscount="Group discount: 20% off for groups of 6 or more cultural enthusiasts"
            barkadaPackageAdmission="Comprehensive palace access including special exhibition areas"
            barkadaPackageGuide="Expert cultural guide with deep knowledge of Joseon dynasty history"
            barkadaPackageTransport="Luxury coach with traditional Korean decor and amenities"
            barkadaPackageExtras="Traditional tea ceremony experience, calligraphy workshop, group photo in royal attire"
            barkadaPackageSchedule="Flexible timing to catch the best lighting for photography and ceremonies"

            {{-- Romantic Package --}}
            couplePackageImage="{{ asset('images/GYEONGBOKGUNG PALACE.webp') }}"
            couplePackageTitle="Royal Palace Romantic Experience"
            couplePackagePickup="Traditional palanquin-style pickup from your hotel to the palace"
            couplePackageTour="Private after-hours palace tour with exclusive access to normally restricted areas"
            couplePackageGift="Complimentary traditional Korean couple rings or palace-themed souvenir"
            couplePackagePhotos="Professional photoshoot in royal Hanbok attire at picturesque palace locations"
            couplePackageSunset="Private sunset viewing from Gyeonghoeru Pavilion with traditional music performance"
            couplePackageDinner="Romantic royal court dinner in a restored palace building (optional upgrade)"
            couplePackageDinnerFrench="Traditional multi-course royal banquet with palace views"
            couplePackageDinnerJapanese="Intimate dinner at Michelin-starred Korean restaurant near palace"
            couplePackageDinnerItalian="Private dinner in palace garden with traditional Korean fusion cuisine"
            couplePackageReturn="Moonlight stroll through palace grounds before return transfer"
            couplePackageNightWalk="Special night tour of illuminated palace (seasonal availability)"
        />
    </div>
</x-layouts.app>