<x-layouts.app title="Dashboard" bg="{{ asset('images/BG OF HOME, SIGN IN, SIGN UP, DESTI PAGES.jpg') }}">
    <div class="container mx-auto px-4 py-8">
        <!-- Success Header -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check-circle text-4xl text-green-600"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Payment Successful!</h1>
            <p class="text-gray-600 mt-2">Your booking has been confirmed</p>
            <p class="text-sm text-gray-500 mt-1">Receipt #: TRV-2024-789456</p>
        </div>

        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Receipt Content -->
            <div class="lg:col-span-2">
                <!-- Receipt Card -->
                <div class="bg-white rounded-lg shadow-lg border border-gray-200">
                    <!-- Receipt Header -->
                    <div class="bg-linear-to-r from-blue-600 to-blue-700 rounded-t-lg p-6 text-white">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-2xl font-bold">TRAVEL RECEIPT</h2>
                                <p class="text-blue-100">Thank you for your booking!</p>
                            </div>
                            <div class="text-right">
                                <p class="text-blue-100">Issued Date</p>
                                <p class="font-semibold">May 15, 2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- Receipt Body -->
                    <div class="p-6">
                        <!-- Booking Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-3">Travel Details</h3>
                                <div class="space-y-2">
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
                                        <span class="font-medium">05/20/2026</span>
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
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-3">Guest Details</h3>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Primary Guest:</span>
                                        <span class="font-medium">Rutchell Ego</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Email:</span>
                                        <span class="font-medium">rutchell@example.com</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Mobile:</span>
                                        <span class="font-medium">+1 (555) 123-4567</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Nationality:</span>
                                        <span class="font-medium">Filipino</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Companion Details -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Companion Details</h3>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm">
                                        <thead>
                                            <tr class="border-b border-gray-200">
                                                <th class="text-left py-2 text-gray-600">Name</th>
                                                <th class="text-left py-2 text-gray-600">Age</th>
                                                <th class="text-left py-2 text-gray-600">Gender</th>
                                                <th class="text-left py-2 text-gray-600">Nationality</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-gray-100">
                                                <td class="py-2">Rutchell Ego</td>
                                                <td class="py-2">32</td>
                                                <td class="py-2">Female</td>
                                                <td class="py-2">Filipino</td>
                                            </tr>
                                            <tr class="border-b border-gray-100">
                                                <td class="py-2">John Smith</td>
                                                <td class="py-2">35</td>
                                                <td class="py-2">Male</td>
                                                <td class="py-2">American</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2">Sarah Johnson</td>
                                                <td class="py-2">28</td>
                                                <td class="py-2">Female</td>
                                                <td class="py-2">Canadian</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Breakdown -->
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Payment Breakdown</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Base Package (3 persons)</span>
                                    <span class="font-medium">₱1,200.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Taxes & Government Fees</span>
                                    <span class="font-medium">₱85.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Service Charge</span>
                                    <span class="font-medium">₱45.00</span>
                                </div>
                                <div class="flex justify-between text-green-600">
                                    <span class="font-medium">Promo Discount (EARLYBIRD10)</span>
                                    <span class="font-medium">-₱120.00</span>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 mt-4 pt-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-gray-800">Total Paid</span>
                                    <span class="text-2xl font-bold text-blue-600">₱1,210.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="border-t border-gray-200 mt-6 pt-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Payment Information</h3>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-600">Payment Method</p>
                                    <p class="font-medium flex items-center">
                                        <i class="fab fa-cc-visa text-2xl text-blue-600 mr-2"></i>
                                        Visa ending in 4567
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="text-gray-600">Transaction ID</p>
                                    <p class="font-medium">TXN-789456123</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Receipt Footer -->
                    <div class="bg-gray-50 rounded-b-lg p-6 border-t border-gray-200">
                        <div class="text-center">
                            <p class="text-sm text-gray-600 mb-2">
                                Need help? Contact our support team at 
                                <a href="mailto:support@travelcompany.com" class="text-blue-600 hover:underline">support@travelcompany.com</a>
                            </p>
                            <p class="text-xs text-gray-500">
                                This receipt is valid for accounting and tax purposes. Please keep it for your records.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mt-6">
                    <button class="flex-1 bg-white border border-blue-600 text-blue-600 font-semibold py-3 px-6 rounded-lg hover:bg-blue-50 transition duration-200 flex items-center justify-center space-x-2">
                        <i class="fas fa-print"></i>
                        <span>Print Receipt</span>
                    </button>
                    <button class="flex-1 bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center justify-center space-x-2">
                        <i class="fas fa-download"></i>
                        <span>Download PDF</span>
                    </button>
                    <button class="flex-1 bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-gray-700 transition duration-200 flex items-center justify-center space-x-2">
                        <i class="fas fa-share-alt"></i>
                        <span>Share Receipt</span>
                    </button>
                </div>
            </div>

            <!-- Sidebar - Next Steps -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">What's Next?</h2>
                    
                    <div class="space-y-4">
                        <!-- Step 1 -->
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center shrink-0 mt-1">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Payment Confirmed</h3>
                                <p class="text-sm text-gray-600">Your payment has been processed successfully</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center shrink-0 mt-1">
                                <span class="text-white text-xs font-bold">2</span>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Document Verification</h3>
                                <p class="text-sm text-gray-600">We'll verify your passport details within 24 hours</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-gray-300 rounded-full flex items-center justify-center shrink-0 mt-1">
                                <span class="text-white text-xs font-bold">3</span>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">E-ticket Delivery</h3>
                                <p class="text-sm text-gray-600">Receive your e-tickets 3 days before departure</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-gray-300 rounded-full flex items-center justify-center shrink-0 mt-1">
                                <span class="text-white text-xs font-bold">4</span>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Enjoy Your Trip!</h3>
                                <p class="text-sm text-gray-600">Have a wonderful experience at Tokyo Tower</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <!-- Support Information -->
                    <div class="bg-blue-50 rounded-lg p-4">
                        <h3 class="font-semibold text-blue-800 mb-2">Need Assistance?</h3>
                        <p class="text-sm text-blue-700 mb-3">
                            Our support team is available 24/7 to help with any questions.
                        </p>
                        <div class="space-y-1 text-sm">
                            <div class="flex items-center space-x-2 text-blue-700">
                                <i class="fas fa-phone-alt w-4"></i>
                                <span>+1 (800) TRAVEL</span>
                            </div>
                            <div class="flex items-center space-x-2 text-blue-700">
                                <i class="fas fa-envelope w-4"></i>
                                <span>support@travelcompany.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Print functionality
        document.querySelector('button:first-child').addEventListener('click', function() {
            window.print();
        });

        // Download PDF (simulated)
        document.querySelectorAll('button')[1].addEventListener('click', function() {
            alert('PDF download would start here!');
        });

        // Share functionality
        document.querySelectorAll('button')[2].addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: 'Travel Booking Receipt',
                    text: 'Check out my travel booking receipt',
                    url: window.location.href
                });
            } else {
                alert('Share functionality not supported in this browser');
            }
        });
    </script>

    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .bg-white, .bg-white * {
                visibility: visible;
            }
            .bg-white {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                box-shadow: none;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</x-layouts.app>