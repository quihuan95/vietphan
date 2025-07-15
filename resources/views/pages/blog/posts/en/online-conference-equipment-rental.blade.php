<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/online-conference-equipment-rental.webp') }}" alt="Tailwind CSS Tips"
      class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">What does a video conferencing equipment setup include? Affordable rental services at Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">In the digital transformation era, businesses increasingly prioritize remote meetings to save costs, reduce travel time, and
      enhance interaction efficiency. But for a smooth and productive virtual meeting, high-quality video conferencing equipment is indispensable. So, what types of equipment are
      essential, and where can you find reliable rental services in Vietnam? Viet Phan has the answers for you below.
    </p>
    <!-- Button Read More -->
    <button @click="openModal('content-online-conference-equipment-rental')"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
