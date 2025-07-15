<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/about-viet-phan.webp') }}" alt="Tailwind CSS Tips" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">Giới thiệu về Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">CÔNG TY TNHH DỊCH VỤ VÀ THƯƠNG MẠI VIET PHAN được thành lập vào năm 2019, hoạt động chuyên sâu trong lĩnh vực tư vấn và cung
      cấp thiết bị chuyên dụng cho Hội nghị – Sự kiện – Du lịch MICE, hướng đến việc mang lại những giải pháp thiết thực, tối ưu và đồng bộ cho các chương trình trong nước và quốc
      tế.
    </p>

    <!-- Button Read More -->
    <button @click="openModal('content-about-viet-phan')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
