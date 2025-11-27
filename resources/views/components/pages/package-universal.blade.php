<x-layouts.app title="Universal Studio" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">
    <div>
        <x-templates.package-template 
            {{-- First section of content --}}
            headerBG="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            firstSectionTitle="Universal Studios"
            firstSectionDescription="Step into the world of movies and entertainment at Universal Studios! Experience thrilling rides, meet your favorite characters, and immerse yourself in the magic of Hollywood. From Wizarding World adventures to Jurassic Park expeditions, create unforgettable memories with family and friends."

            {{-- Second section of content | Left column --}}
            secondSectionFirstDayImage="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            secondSectionFirstDayTitle="Day 1: Arrival & Park Orientation"
            secondSectionFirstDayDetails="On Day 1, arrive at your themed resort hotel with early park admission benefits. After check-in, enjoy a welcome orientation with your guide, get your Express Passes, and experience your first magical evening at the Wizarding World of Harry Potter with light shows and character meet-ups."
            
            secondSectionSecondDayImage="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            secondSectionSecondDayTitle="Day 2: Full Park Adventure"
            secondSectionSecondDayDetails="On Day 2, experience the complete Universal Studios magic! Enjoy priority access to all major attractions including Transformers, Jurassic World, Minion Park, and Hollywood Rip Ride Rockit. Includes character dining experiences, behind-the-scenes tours, and reserved seating for spectacular shows."
            
            secondSectionThirdDayImage="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            secondSectionThirdDayTitle="Day 3: Islands of Adventure & Departure"
            secondSectionThirdDayDetails="On Day 3, conquer Islands of Adventure with early access to Hagrid's Magical Creatures Motorbike Adventure and VelociCoaster. Enjoy a farewell character breakfast, last-minute souvenir shopping with exclusive discounts, and convenient transfer to the airport with unforgettable memories."

            {{-- Third section of content | Packages --}}
            thirdSectionHeaderTitle="UNIVERSAL STUDIOS PACKAGES"
            thirdSectionHeaderSubtitle="Choose Your Magical Adventure"

            {{-- Family Package --}}
            familyPackageImage="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            familyPackageTitle="Universal Studios Family Fun Package"
            familyPackageAccommodation="3-night stay at Universal-themed resort hotel with early park admission"
            familyPackageDiscounts="Kids under 10 stay and eat free, 25% off for families of 5+"
            familyPackageAdmission="3-Day Park-to-Park tickets with Express Unlimited Passes for all attractions"
            familyPackageGuide="Dedicated family guide with character meet-and-greet coordination"
            familyPackageTransport="Complimentary Universal shuttle service and resort transportation"
            familyPackageMeals="Daily breakfast with characters, 2 themed lunches, and 1 signature dinner"
            familyPackageExtras="$100 merchandise credit per room, photo package, souvenir refillable cups"
            familyPackageCancellation="Free cancellation up to 30 days before travel"
            familyPackageExtension="Add Volcano Bay water park or Halloween Horror Nights (seasonal)"

            {{-- Group Package --}}
            barkadaPackageImage="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            barkadaPackageTitle="Universal Studios Group Adventure"
            barkadaPackageDiscount="Group special: 20% off for groups of 6+, 30% off for 10+ friends"
            barkadaPackageAdmission="2-Day Park-to-Park tickets with Express Passes for all major rides"
            barkadaPackageGuide="Thrill-seeker guide with ride strategy and photo coordination"
            barkadaPackageTransport="Private group transfers between hotel and parks"
            barkadaPackageExtras="Exclusive after-hours access, group photo ops, souvenir lanyards"
            barkadaPackageSchedule="Flexible itinerary with customized ride priorities and dining preferences"

            {{-- VIP Package --}}
            couplePackageImage="{{ asset('images/UNIVERSAL STUDIO.webp') }}"
            couplePackageTitle="Universal Studios VIP Romantic Getaway"
            couplePackagePickup="Luxury private transfer with champagne welcome"
            couplePackageTour="Private VIP tour guide with front-of-line access to all attractions"
            couplePackageGift="Complimentary wands at Ollivanders or Minion merchandise package"
            couplePackagePhotos="Professional photoshoot at iconic park locations including Hogwarts"
            couplePackageSunset="Private castle light show viewing with reserved front-row seating"
            couplePackageDinner="Romantic dinner at Mythos Restaurant or The Palm (optional upgrade)"
            couplePackageDinnerFrench="Fine dining at Bice with park views and wine pairing"
            couplePackageDinnerJapanese="Exclusive sushi experience at Emeril's Tchoup Chop"
            couplePackageDinnerItalian="Private dinner in Central Park area with live entertainment"
            couplePackageReturn="Moonlit stroll through The Wizarding World before private transfer"
            couplePackageNightWalk="Special evening tour of illuminated parks with fewer crowds"
        />
    </div>
</x-layouts.app>