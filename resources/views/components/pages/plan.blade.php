<x-layouts.app title="Dashboard" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">
<div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">PLAN YOUR TRIP</h1>
            <p class="text-gray-600">Complete the form below to book your dream vacation</p>
        </div>

        <form action="/dashboard/payment" method="GET" enctype="multipart/form-data" class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Travel Details Section -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Travel Details</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Destination -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">DESTINATION</label>
                        <input type="text" 
                               name="destination"
                               placeholder="EX. TOKYO TOWER"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Hotel Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">HOTEL NAME</label>
                        <input type="text" 
                               name="hotel_name"
                               placeholder="NEAR TOKYO TOWER"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Tour Date -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">TOUR DATE</label>
                        <input type="date" 
                               name="tour_date"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Number of Guests -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">NUMBER OF GUESTS</label>
                        <select name="number_of_guests"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                required>
                            <option value="">Select number of guests</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 Persons</option>
                            <option value="3" selected>3 Persons</option>
                            <option value="4">4 Persons</option>
                            <option value="5">5 Persons</option>
                            <option value="6">6+ Persons</option>
                        </select>
                    </div>

                    <!-- Package Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">PACKAGE TYPE</label>
                        <select name="package_type"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                required>
                            <option value="">Select package type</option>
                            <option value="family">Family</option>
                            <option value="couple">Couple</option>
                            <option value="solo">Solo Traveler</option>
                            <option value="business">Business</option>
                            <option value="group">Group</option>
                            <option value="luxury">Luxury</option>
                        </select>
                    </div>

                    <!-- Hotel Address -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">HOTEL ADDRESS</label>
                        <input type="text" 
                               name="hotel_address"
                               placeholder="EX. ASHUSHIBAIAHASHI"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>
                </div>
            </div>

            <!-- Personal Details Section -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Personal Details</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">NAME</label>
                        <input type="text" 
                               name="name"
                               placeholder="RUTCHELL EGO"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">DATE OF BIRTH</label>
                        <input type="date" 
                               name="date_of_birth"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Nationality -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">NATIONALITY</label>
                        <select name="nationality"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                required>
                            <option value="">Select nationality</option>
                            <option value="filipino">Filipino</option>
                            <option value="american">American</option>
                            <option value="japanese">Japanese</option>
                            <option value="british">British</option>
                            <option value="canadian">Canadian</option>
                            <option value="australian">Australian</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Mobile Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">MOBILE NUMBER</label>
                        <input type="tel" 
                               name="mobile_number"
                               placeholder="+1 (555) 123-4567"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Email Address -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">EMAIL ADDRESS</label>
                        <input type="email" 
                               name="email"
                               placeholder="your.email@example.com"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               required>
                    </div>

                    <!-- Home Address -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">HOME ADDRESS</label>
                        <textarea name="home_address"
                                  rows="3"
                                  placeholder="Enter your complete home address"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                  required></textarea>
                    </div>
                </div>
            </div>

            <!-- Companion Details Section -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Companion Details</h2>
                <p class="text-gray-600 mb-4">Add details for all guests traveling with you</p>
                
                <!-- Companion 1 (Primary Guest) -->
                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <h3 class="font-semibold text-gray-800 mb-3">Primary Guest</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">NAME</label>
                            <input type="text" 
                                   name="companions[0][name]"
                                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">AGE</label>
                            <input type="number" 
                                   name="companions[0][age]"
                                   min="1"
                                   max="120"
                                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">GENDER</label>
                            <select name="companions[0][gender]"
                                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">NATIONALITY</label>
                            <input type="text" 
                                   name="companions[0][nationality]"
                                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm font-medium text-gray-700 mb-1">PASSPORT DETAILS</label>
                        <input type="text" 
                               name="companions[0][passport_details]"
                               placeholder="EX. NUMBER/EXPDATE/ISSUING COUNTRY"
                               class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               required>
                    </div>
                </div>

                <!-- Additional Companions -->
                <div id="additional-companions"></div>

                <!-- Add Companion Button -->
                <button type="button" 
                        id="add-companion"
                        class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 font-medium">
                    <i class="fas fa-plus-circle"></i>
                    <span>Add Another Companion</span>
                </button>
            </div>

            <!-- Passport Upload Section -->
            <div class="p-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-blue-800 mb-3">Passport Verification</h2>
                    <p class="text-blue-700 mb-4">
                        "To finalize your tour reservation, kindly attach a clear photo or scanned copy of your passport (photo page only). This is required for travel verification and ticket issuance."
                    </p>

                    <!-- File Upload -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload Passport Photo Page</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="passport_upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none">
                                        <span>Upload a file</span>
                                        <input id="passport_upload" name="passport_upload" type="file" class="sr-only" accept=".jpg,.jpeg,.png,.pdf">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">JPG, PNG, or PDF up to 5MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image Requirements -->
                    <div class="bg-white rounded-lg p-4 border border-gray-200">
                        <h3 class="font-semibold text-gray-800 mb-2">Image Requirements</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                Must be clear and readable (not blurry or cropped)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                Accepted formats: JPG, PNG, or .PDF
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                File size: ideally below 5 MB
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                Show only the passport's photo page (for privacy — no need to include visa or stamps)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <div class="flex justify-between items-center">
                    <button type="button" 
                            class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-200">
                        Save as Draft
                    </button>
                    <button type="submit" 
                            class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200 flex items-center space-x-2">
                        <i class="fas fa-plane"></i>
                        <span>Continue to Payment</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        let companionCount = 1;

        document.getElementById('add-companion').addEventListener('click', function() {
            const companionsContainer = document.getElementById('additional-companions');
            
            const companionDiv = document.createElement('div');
            companionDiv.className = 'bg-gray-50 rounded-lg p-4 mb-4';
            companionDiv.innerHTML = `
                <div class="flex justify-between items-center mb-3">
                    <h3 class="font-semibold text-gray-800">Companion ${companionCount + 1}</h3>
                    <button type="button" class="text-red-500 hover:text-red-700 remove-companion">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">NAME</label>
                        <input type="text" 
                               name="companions[${companionCount}][name]"
                               class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">AGE</label>
                        <input type="number" 
                               name="companions[${companionCount}][age]"
                               min="1"
                               max="120"
                               class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">GENDER</label>
                        <select name="companions[${companionCount}][gender]"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">NATIONALITY</label>
                        <input type="text" 
                               name="companions[${companionCount}][nationality]"
                               class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               required>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="block text-sm font-medium text-gray-700 mb-1">PASSPORT DETAILS</label>
                    <input type="text" 
                           name="companions[${companionCount}][passport_details]"
                           placeholder="EX. NUMBER/EXPDATE/ISSUING COUNTRY"
                           class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           required>
                </div>
            `;

            companionsContainer.appendChild(companionDiv);
            companionCount++;

            // Add event listener to remove button
            companionDiv.querySelector('.remove-companion').addEventListener('click', function() {
                companionDiv.remove();
            });
        });

        // File upload preview (basic implementation)
        document.getElementById('passport_upload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                console.log('File selected:', file.name);
                // You can add file preview logic here
            }
        });
    </script>
</x-layouts.app>