@extends('frontend.frontendLayout')
@section('userContent')
    <!-- Include Swiper CSS -->


    <div class="relative w-full max-w-7xl mx-auto">
        <!-- Swiper Container -->
        <div class="swiper mySwiper rounded-xl overflow-hidden m-6">
            <div class="swiper-wrapper ">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg?text=Slide+1" class="w-full rounded-lg" />
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg?text=Slide+2" class="w-full rounded-lg" />
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg?text=Slide+3" class="w-full rounded-lg" />
                </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>

            <!-- Pagination Dots -->
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>

    <!-- Include Swiper JS -->

    <section class="py-12 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-8">The Latest Announcement from C5K</h2>
        <div class="max-w-7xl mx-auto grid gap-6 md:grid-cols-3 px-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://www.c5k.com/public/backend/news/20241231190547.png" alt="Technological Innovations"
                    class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="font-bold text-lg">Technological Innovations Shap...</h3>
                    <p class="text-gray-600 mt-2">As we step into a new era of discovery, technological innovations are
                        dramatical...</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://www.c5k.com/public/backend/news/20241231190547.png" alt="Funding Opportunities"
                    class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="font-bold text-lg">Funding Opportunities for Inno...</h3>
                    <p class="text-gray-600 mt-2">In an era defined by rapid technological advancement and unprecedented
                        challenge...</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://www.c5k.com/public/backend/news/20241231190547.png" alt="Global Health Research"
                    class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="font-bold text-lg">Global Health Research Partner...</h3>
                    <p class="text-gray-600 mt-2">In the wake of the COVID-19 pandemic, universities across the globe are
                        recogniz...</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                </div>
            </div>
        </div>
        <button class="mt-6 bg-black text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:bg-gray-800 transition">
            See More →
        </button>

    </section>



    <div class="text-center mt-8">
        <h2 class="text-3xl font-bold mt-4">Discover the insights of our 12 diverse journals</h2>
    </div>

    <!-- Journal Grid -->
    <div class="max-w-7xl mx-auto px-4 mt-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 ">
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>
            <!-- Journal 1 -->
            <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition w- h-[240px]">
                <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1" class="w-auto h-[240px]">
            </div>


        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true, // Enables infinite looping
            autoplay: {
                delay: 3000, // Auto-slide every 3 seconds
                disableOnInteraction: false, // Keeps autoplay after manual swipe
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            effect: "slide", // Ensures smooth sliding
            preventClicks: true, // Prevents unwanted blue highlight
            preventClicksPropagation: false, // Ensures click event works properly
        });
    </script>
@endpush
