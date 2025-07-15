<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/about-viet-phan.webp') }}" alt="Tailwind CSS Tips" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">About Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">VIET PHAN SERVICES AND TRADING COMPANY LIMITED, established in 2019, specializes in consulting and supplying professional
      equipment for Conferences – Events – MICE Tourism, aiming to deliver practical, optimized, and integrated solutions for both domestic and international programs.</p>

    <!-- Button Read More -->
    <button @click="openModal('content-about-viet-phan')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
