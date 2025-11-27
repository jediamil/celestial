<x-layouts.app title="Dashboard" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">
       <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Complete Your Booking</h1>
            <p class="text-gray-600 mt-2">Final step to confirm your travel plans</p>
        </div>

        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Booking Summary -->
            <div class="lg:col-span-2">
                <!-- Payment Methods -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Payment Method</h2>
                    
                    <!-- Credit Card Option -->
                    <div class="border border-gray-200 rounded-lg p-4 mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <input type="radio" name="payment_method" id="credit_card" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                <label for="credit_card" class="ml-3 block text-sm font-medium text-gray-700">
                                    Credit/Debit Card
                                </label>
                            </div>
                            <div class="flex space-x-2">
                                <i class="fab fa-cc-visa text-2xl text-blue-600"></i>
                                <i class="fab fa-cc-mastercard text-2xl text-red-600"></i>
                                <i class="fab fa-cc-amex text-2xl text-blue-800"></i>
                            </div>
                        </div>

                        <!-- Card Form -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                                <div class="relative">
                                    <input type="text" 
                                           placeholder="1234 5678 9012 3456" 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <i class="fab fa-cc-visa absolute right-3 top-3 text-gray-400"></i>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                                    <input type="text" 
                                           placeholder="MM/YY" 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                                    <input type="text" 
                                           placeholder="123" 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Cardholder Name</label>
                                <input type="text" 
                                       placeholder="John Doe" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- PayPal Option -->
                    <div class="border border-gray-200 rounded-lg p-4 mb-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="radio" name="payment_method" id="paypal" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700">
                                    PayPal
                                </label>
                            </div>
                            <i class="fab fa-cc-paypal text-2xl text-blue-600"></i>
                        </div>
                    </div>

                    <!-- Bank Transfer Option -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="radio" name="payment_method" id="bank_transfer" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                <label for="bank_transfer" class="ml-3 block text-sm font-medium text-gray-700">
                                    Bank Transfer
                                </label>
                            </div>
                            <i class="fas fa-university text-2xl text-gray-600"></i>
                        </div>
                    </div>
                </div>

                <!-- Billing Address -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Billing Address</h2>
                    
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                            <input type="text" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                <input type="text" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                                <input type="text" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>United States</option>
                                <option>Japan</option>
                                <option>United Kingdom</option>
                                <option>Canada</option>
                                <option>Australia</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Booking Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Booking Summary</h2>
                    
                    <!-- Travel Details -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Destination:</span>
                            <span class="font-medium">Tokyo Tower</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Hotel:</span>
                            <span class="font-medium">Near Tokyo Tower</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tour Date:</span>
                            <span class="font-medium">05/20/26</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Guests:</span>
                            <span class="font-medium">3 Persons</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Package:</span>
                            <span class="font-medium">Family</span>
                        </div>
                    </div>

                    <hr class="my-4">

                    <!-- Price Breakdown -->
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Base Price</span>
                            <span class="font-medium">$1,200.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Taxes & Fees</span>
                            <span class="font-medium">$85.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Service Charge</span>
                            <span class="font-medium">$45.00</span>
                        </div>
                    </div>

                    <hr class="my-4">

                    <!-- Total -->
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-lg font-bold text-gray-800">Total</span>
                        <span class="text-2xl font-bold text-blue-600">$1,330.00</span>
                    </div>

                    <!-- Security Badges -->
                    <div class="bg-green-50 border border-green-200 rounded-lg p-3 mb-4">
                        <div class="flex items-center justify-center space-x-2 text-green-700">
                            <i class="fas fa-lock"></i>
                            <span class="text-sm font-medium">Secure SSL Encryption</span>
                        </div>
                    </div>

                    <!-- Pay Button -->
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center space-x-2">
                        <i class="fas fa-lock"></i>
                        <span>Pay Now $1,330.00</span>
                    </button>

                    <!-- Additional Info -->
                    <div class="mt-4 text-center">
                        <p class="text-xs text-gray-500">
                            By completing this purchase, you agree to our 
                            <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> 
                            and 
                            <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple payment method switcher
        document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
            radio.addEventListener('change', function() {
                // You can add logic here to show/hide specific payment form sections
                console.log('Payment method changed to:', this.id);
            });
        });

        // Form submission
        document.querySelector('button').addEventListener('click', function(e) {
            e.preventDefault();
            // Add your payment processing logic here
            alert('Payment processing would start here!');

            window.location.href = '/dashboard/payment/receipt';
        });
    </script>
</x-layouts.app>