<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/cabin-translation-equipment-rental.webp') }}" alt="Tailwind CSS Tips"
      class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">Dịch vụ cho thuê thiết bị dịch cabin uy tín, chất lượng tại Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Trong bối cảnh toàn cầu hóa ngày càng sâu rộng, các hội nghị và sự kiện quốc tế đòi hỏi giải pháp ngôn ngữ tối ưu để kết nối
      trọn vẹn giữa những nền văn hóa khác biệt. Dịch cabin - hình thức phiên dịch đồng thời thông qua thiết bị chuyên dụng - đã trở thành yếu tố không thể thiếu trong những chương
      trình mang tính toàn cầu. Tại Viet Phan, chúng tôi cung cấp dịch vụ cho thuê thiết bị dịch cabin đạt chuẩn quốc tế, đảm bảo chất lượng và độ tin cậy cao, góp phần nâng tầm
      hiệu quả truyền thông và trải nghiệm cho mọi khách mời.</p>

    <!-- Button Read More -->
    <button @click="openModal('content-cabin-translation-equipment-rental')"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
