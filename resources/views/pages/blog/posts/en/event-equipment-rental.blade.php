<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/event-equipment-rental.webp') }}" alt="Tailwind CSS Tips" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">Trusted and all-inclusive event equipment rental services by Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">A major event is about to begin, the guests are seated, the stage is glowing, the MC holds the mic… and suddenly, the sound
      system fails. In that moment, all the planning and preparation risk falling apart due to one seemingly small detail: the equipment. That’s why event equipment rental at Viet
      Phan is not just about providing gear, it’s about delivering a reliable foundation that keeps every event running smoothly. With hands-on experience and a meticulous
      operating process, we stand behind the scenes to ensure that every moment unfolds seamlessly, impressively, and memorably.
    </p>

    <!-- Button Read More -->
    <button @click="openModal('content-event-equipment-rental')"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
