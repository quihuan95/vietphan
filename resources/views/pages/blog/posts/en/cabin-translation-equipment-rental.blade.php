<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/cabin-translation-equipment-rental.webp') }}" alt="Tailwind CSS Tips"
      class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">Reliable and high-quality interpretation booth rental service by Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">In an increasingly globalized world, international conferences and events demand optimal language solutions to bridge cultural
      differences seamlessly. Simultaneous interpretation using professional interpretation booths has become an essential component of any global gathering. At Viet Phan, we offer
      high-quality interpretation booth rental services that meet international standards, ensuring reliability, clear communication, and an enhanced experience for every attendee.
    </p>

    <!-- Button Read More -->
    <button @click="openModal('content-cabin-translation-equipment-rental')"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
