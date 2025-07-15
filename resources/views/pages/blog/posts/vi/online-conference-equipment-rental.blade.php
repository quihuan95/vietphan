<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/online-conference-equipment-rental.webp') }}" alt="Tailwind CSS Tips"
      class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">Thiết bị hội nghị trực tuyến gồm những gì? Dịch vụ cho thuê giá tốt tại Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Trong thời đại chuyển đổi số, các doanh nghiệp ngày càng ưu tiên tổ chức họp từ xa để tiết kiệm chi phí, thời gian và nâng cao
      hiệu quả tương tác. Nhưng để một cuộc họp trực tuyến diễn ra mượt mà, không thể thiếu những thiết bị hội nghị trực tuyến chất lượng. Vậy những thiết bị nào là cần thiết, và
      đâu là địa chỉ cho thuê uy tín tại Việt Nam? Viet Phan sẽ giúp bạn trả lời ngay sau đây.</p>

    <!-- Button Read More -->
    <button @click="openModal('content-online-conference-equipment-rental')"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
