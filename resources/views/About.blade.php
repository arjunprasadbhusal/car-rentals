@extends('layouts.master')
@section('content')

<section class="py-12 px-6 bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-6">
        <!-- Left Column: Heading and Description -->
        <div class="space-y-6 text-center md:text-left">
            <h1 class="text-4xl font-bold text-gray-800">
                We offer customers a wide range of 
                <span class="text-blue-500">commercial cars</span> and 
                <span class="text-blue-500">luxury cars</span> for any occasion.
            </h1>
        
        </div>

        <!-- Right Column: Empty Space or Image Placeholder -->
        <div class="hidden md:block">
        <p class="mt-6 text-lg text-gray-700 max-w-2xl">
        At Rentaly, we are dedicated to providing exceptional car rental 
        services to our valued customers. With a commitment to quality, convenience,
         and customer satisfaction, we strive to make every rental experience a seamless and 
        enjoyable one. We understand that every customer has
         unique needs and preferences when it comes to renting a car.
          That's why we maintain a diverse fleet of well-maintained vehicles to 
          cater to various requirements. From compact cars for solo travelers to 
          spacious SUVs for families, we have a wide range of options to choose from.
            </p>
          
    </div>
</section>


    <section class="py-12 bg-gray-50">
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 ">
            <div class="text-center bg-blue-200 rounded-lg">
                <h2 class="text-3xl font-bold text-yellow-500">15425</h2>
                <p class="text-black mt-2 font-bold">Completed Orders</p>
            </div>
            <div class="text-center  bg-blue-200 rounded-lg">
                <h2 class="text-3xl font-bold text-yellow-500">8745</h2>
                <p class="text-black mt-2 font-bold">Happy Customers</p>
            </div>
            <div class="text-center  bg-blue-200 rounded-lg">
                <h2 class="text-3xl font-bold text-yellow-500">235</h2>
                <p class="text-black mt-2 font-bold">Vehicles Fleet</p>
            </div>
            <div class="text-center bg-blue-200 rounded-lg">
                <h2 class="text-3xl font-bold text-yellow-500">15</h2>
                <p class="text-black mt-2 font-bold">Years Experience</p>
            </div>
        </div>
    </section>

    <header class="relative">
    <img src="{{ asset('parking.jpg') }}" alt="Background" class="w-full h-screen object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white px-8 py-4">
            <h1 class="text-5xl font-bold mb-8">
                <span class="text-blue-400">Board of Directors</span>
            </h1>

            <!-- Member Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Member Card 1 -->
                <div class="relative bg-white shadow-md rounded-lg overflow-hidden group">
                    <img class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" src="arjun.png" alt="Fynley Wilkinson">
                    <!-- Social Media Links Overlay -->
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4">
                        <a href="https://instagram.com" class="text-white hover:text-blue-600">
                            <i class="ri-instagram-fill "></i>
                        </a>
                        <a href="https://facebook.com" class="text-white hover:text-blue-600 ">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://whatsapp.com" class="text-white  hover:text-blue-600">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Arjun Prasad Bhusal</h3>
                        <p class="text-gray-600">Chief Creative Officer</p>
                    </div>
                    <!-- Hover Pop-Up Image -->
                    
                </div>

                <!-- Repeat the member card structure for other members similarly -->
                <div class="relative bg-white shadow-md rounded-lg overflow-hidden group">
                    <img class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" src="manoj.png" alt="Peter Welsh">
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4">
                        <a href="https://instagram.com" class="text-white hover:text-blue-600">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://facebook.com" class="text-white hover:text-blue-600">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://whatsapp.com" class="text-white hover:text-blue-600">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Manoj Neupane </h3>
                        <p class="text-gray-600">Chief Technology Officer</p>
                    </div>
                    <!-- Hover Pop-Up Image -->
                   
                </div>

                <div class="relative bg-white shadow-md rounded-lg overflow-hidden group">
                    <img class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" src="pradip.png" alt="Peter Welsh">
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4">
                        <a href="https://instagram.com" class="text-white hover:text-blue-600">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://facebook.com" class="text-white hover:text-blue-600">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://whatsapp.com" class="text-white hover:text-blue-600">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Pradip Khanal</h3>
                        <p class="text-gray-600">Chief Executive Officer</p>
                    </div>
                    <!-- Hover Pop-Up Image -->
                   
                </div>

                <div class="relative bg-white shadow-md rounded-lg overflow-hidden group">
                    <img class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" src="prabesh.png" alt="Peter Welsh">
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4">
                        <a href="https://instagram.com" class="text-white hover:text-blue-600 ">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://facebook.com" class="text-white hover:text-blue-600">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://whatsapp.com" class="text-white hover:text-blue-600">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Prabesh Aacharya</h3>
                        <p class="text-gray-600">Chief Financial Officer</p>
                    </div>
                    <!-- Hover Pop-Up Image -->
                   
                </div>

                <!-- More Member Cards follow the same structure ... -->

            </div>
        </div>
    </div>
</header>

<div class="container mx-auto py-12">
    <h1 class="text-4xl font-bold text-center mb-12">Features Highlight</h1>
    <div class="flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-12">
        <!-- Left Section -->
        <div class="space-y-8 text-center lg:text-left">
            <div class="feature-item flex items-center space-x-4 opacity-0 translate-y-4 transition-all duration-700 ease-in-out">
                <div class="bg-green-500 text-white p-4 rounded-full">
                    <i class="ri-trophy-fill text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">First Class Services</h2>
                    <p class="text-gray-600">
                        Where luxury meets exceptional care, creating unforgettable moments and exceeding your every expectation.
                    </p>
                </div>
            </div>
            <div class="feature-item flex items-center space-x-4 opacity-0 translate-y-4 transition-all duration-700 ease-in-out">
                <div class="bg-green-500 text-white p-4 rounded-full">
                    <i class="ri-road-fill text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">24/7 Road Assistance</h2>
                    <p class="text-gray-600">
                        Reliable support when you need it most, keeping you on the move with confidence and peace of mind.
                    </p>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="feature-item flex justify-center opacity-0 translate-y-4 transition-all duration-700 ease-in-out">
            <img src="likeit.png" alt="Car Image" class="w-full max-w shadow-lg rounded-lg">
        </div>

        <!-- Right Section -->
        <div class="space-y-8 text-center lg:text-right">
            <div class="feature-item flex items-center space-x-4 lg:space-x-reverse opacity-0 translate-y-4 transition-all duration-700 ease-in-out">
                <div class="bg-green-500 text-white p-4 rounded-full">
                    <i class="ri-tag-fill text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Quality at Minimum Expense</h2>
                    <p class="text-gray-600">
                        Unlocking affordable brilliance by elevating quality while minimizing costs for maximum value.
                    </p>
                </div>
            </div>
            <div class="feature-item flex items-center space-x-4 lg:space-x-reverse opacity-0 translate-y-4 transition-all duration-700 ease-in-out">
                <div class="bg-green-500 text-white p-4 rounded-full">
                    <i class="ri-key-fill text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Free Pick-Up & Drop-Off</h2>
                    <p class="text-gray-600">
                        Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="flex flex-col md:flex-row items-center bg-white shadow-lg ">
    <div class="md:w-1/2">
        <img src="arjun.png" alt="Happy Client" class="rounded-lg shadow-lg w-full">
    </div>
    <div class="md:w-1/2 text-center md:text-left mt-6 md:mt-0 p-12">
        <h1 class="text-4xl font-bold text-gray-800">Only Quality For Clients</h1>
        <div class="flex justify-center md:justify-start mt-4">
            <button class="px-4 py-2 bg-gray-300 text-white font-semibold rounded-lg mx-2 tab-button" data-tab="luxury">Luxury</button>
            <button class="px-4 py-2 bg-gray-300 text-white font-semibold rounded-lg mx-2 tab-button" data-tab="comfort">Comfort</button>
            <button class="px-4 py-2 bg-gray-300 text-white font-semibold rounded-lg mx-2 tab-button" data-tab="prestige">Prestige</button>
        </div>
        <div class="text-gray-600 mt-4 tab-content p-10 text-2xl ">
            <!-- Default content for Comfort -->
            <p>
                We prioritize your comfort and convenience throughout your journey. We understand that a comfortable ride can make a world of difference, whether you're embarking on a business trip or enjoying a leisurely vacation. That’s why we offer a wide range of well-maintained, comfortable cars that cater to your specific needs.
            </p>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="bg-green-500 text-white py-6 mt-6 text-center">
    <p class="text-lg">Call us for further information. Rentaly customer care is here to help you anytime.</p>
    <h2>CONTACT US NOW</h2>
    <i class="ri-phone-fill text-4xl"></i>
    <h2 class="text-3xl font-bold mt-2">1200 333 800</h2>
    <br>
    <a href="{{('contact')}} " class="mt-4 px-6 py-2 bg-white text-green-500 font-semibold rounded-lg">Contact Us</a>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.tab-button');
        const content = document.querySelector('.tab-content');

        // Content for each tab
        const tabContents = {
            luxury: `
                <p>
                    Indulge in the finest experience with our luxury cars. Designed for those who demand excellence, our fleet offers premium features and unparalleled comfort for your ultimate driving experience.
                </p>
            `,
            comfort: `
                <p>
                    We prioritize your comfort and convenience throughout your journey. We understand that a comfortable ride can make a world of difference, whether you're embarking on a business trip or enjoying a leisurely vacation. That’s why we offer a wide range of well-maintained, comfortable cars that cater to your specific needs.
                </p>
            `,
            prestige: `
                <p>
                    Prestige is not just a word—it's a lifestyle. Experience our top-tier vehicles that combine elegance and performance, making every journey a statement of sophistication and class.
                </p>
            `
        };

        // Add click event listeners to buttons
        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                // Update active button styling
                buttons.forEach((btn) => btn.classList.remove('bg-green-500', 'text-white'));
                button.classList.add('bg-green-500', 'text-white');

                // Update content based on data-tab
                const tab = button.getAttribute('data-tab');
                content.innerHTML = tabContents[tab];
            });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const items = document.querySelectorAll('.feature-item');

        // Create Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Trigger animation when item comes into view
                    entry.target.classList.remove('opacity-0', 'translate-y-4');
                    observer.unobserve(entry.target); // Unobserve once animated
                }
            });
        }, {
            threshold: 0.8, // Trigger when 20% of the element is visible
        });

        // Observe each feature item
        items.forEach((item) => {
            observer.observe(item);
        });
    });
</script>
>

@endsection






