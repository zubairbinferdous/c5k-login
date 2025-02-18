<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>C5K</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-gray-900 text-white p-3">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="#" class="flex items-center hover:text-gray-400">
                    <span class="mr-1">🏠</span>C5K.com
                </a>
                <a href="#" class="hover:text-gray-400">C5K.co</a>
                <a href="#" class="hover:text-gray-400">C5K.ec</a>
                <a href="#" class="hover:text-gray-400">C5K.nl</a>
                <a href="#" class="hover:text-gray-400">More Sites</a>

            </div>

            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-400">Membership</a>
                <a href="#" class="hover:text-gray-400">Sign In</a>
                <a href="#" class="hover:text-gray-400 font-bold">JOIN C5K</a>
            </div>
        </div>
    </nav>
    <nav class="bg-[#007C92] p-4 shadow-lg">
        <div class="max-w-7xl m-auto flex justify-center items-center">
            {{-- <div class="text-white text-2xl font-extrabold">Brand</div> --}}

            <div class="hidden md:flex space-x-6 text-white font-medium">
                <a href="#" class="hover:text-gray-200 transition">Home</a>
                <a href="#" class="hover:text-gray-200 transition">About</a>
                <a href="#" class="hover:text-gray-200 transition">Academic Journals</a>
                <a href="#" class="hover:text-gray-200 transition">Dissertation/Thesis</a>
                <a href="#" class="hover:text-gray-200 transition">Books</a>
                <a href="#" class="hover:text-gray-200 transition">Conferences</a>
                <a href="#" class="hover:text-gray-200 transition">Announcements</a>
            </div>

            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                ☰
            </button>
        </div>

        <div id="mobile-menu"
            class="hidden md:hidden bg-[#007C92] text-white flex flex-col space-y-2 mt-2 p-4 rounded-lg">
            <a href="#" class="hover:text-gray-200 transition">Home</a>
            <a href="#" class="hover:text-gray-200 transition">About</a>
            <a href="#" class="hover:text-gray-200 transition">Academic Journals</a>
            <a href="#" class="hover:text-gray-200 transition">Dissertation/Thesis</a>
            <a href="#" class="hover:text-gray-200 transition">Books</a>
            <a href="#" class="hover:text-gray-200 transition">Conferences</a>
            <a href="#" class="hover:text-gray-200 transition">Announcements</a>
        </div>
    </nav>


    @yield('userContent')

    <footer class="bg-blue-800 text-white py-8 mt-10">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-6 text-sm px-6">
            <div>
                <h2 class="font-bold">ABOUT C5K</h2>
                <a href="#" class="block mt-2 hover:text-gray-300">Learn more about C5K</a>
                <a href="#" class="block hover:text-gray-300">Mission & Vision</a>
            </div>
            <div>
                <h2 class="font-bold">LOCATION</h2>
                <p class="mt-2">761 STATE HIGHWAY 100</p>
                <p>Port Isabel, TX 78578 USA</p>
                <a href="#" class="block mt-2 hover:text-gray-300">Contact & Support</a>
            </div>
            <div>
                <h2 class="font-bold">GET INVOLVED</h2>
                <a href="#" class="block mt-2 hover:text-gray-300">Conference</a>
                <a href="#" class="block hover:text-gray-300">Societies</a>
                <a href="#" class="block hover:text-gray-300">Technical career</a>
                <a href="#" class="block hover:text-gray-300">Scholarship</a>
            </div>
            <div>
                <h2 class="font-bold">RESOURCES</h2>
                <a href="#" class="block mt-2 hover:text-gray-300">Author guideline</a>
                <a href="#" class="block hover:text-gray-300">Paper format download</a>
                <a href="#" class="block hover:text-gray-300">Submit Article</a>
                <a href="#" class="block hover:text-gray-300">Book publishing</a>
                <a href="#" class="block hover:text-gray-300">Thesis/Dissertation</a>
            </div>
        </div>
        <div class="bg-gray-900 text-center text-sm py-4 mt-4">
            &copy; Copyright 2024 C5K – All rights reserved. A not-for-profit organization, C5K is the world's largest
            technical professional organization dedicated to advancing technology for the benefit of humanity.
        </div>
    </footer>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>
</body>

</html>
