@extends('frontend.frontendLayout')
@section('userContent')
    <section class="py-12 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-8">The Latest Announcement from C5K</h2>
        <div class="max-w-7xl mx-auto grid gap-6 md:grid-cols-3 px-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="image1.jpg" alt="Technological Innovations" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="font-bold text-lg">Technological Innovations Shap...</h3>
                    <p class="text-gray-600 mt-2">As we step into a new era of discovery, technological innovations are
                        dramatical...</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="image2.jpg" alt="Funding Opportunities" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="font-bold text-lg">Funding Opportunities for Inno...</h3>
                    <p class="text-gray-600 mt-2">In an era defined by rapid technological advancement and unprecedented
                        challenge...</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="image3.jpg" alt="Global Health Research" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="font-bold text-lg">Global Health Research Partner...</h3>
                    <p class="text-gray-600 mt-2">In the wake of the COVID-19 pandemic, universities across the globe are
                        recogniz...</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                </div>
            </div>
        </div>
        <button class="mt-6 bg-green-500 text-white font-semibold px-6 py-2 rounded-lg hover:bg-green-600 transition">See
            More →</button>
    </section>
@endsection
