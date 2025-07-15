<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
  <!-- Hình ảnh -->
  <div class="h-[300px] aspect-video bg-gray-200 overflow-hidden">
    <img src="{{ asset('images/blog/event-equipment-rental.webp') }}" alt="Tailwind CSS Tips" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
  </div>

  <!-- Nội dung card -->
  <div class="p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2">Dịch vụ cho thuê thiết bị sự kiện uy tín, trọn gói tại Viet Phan</h2>
    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Một sự kiện lớn, khách mời đã sẵn sàng, sân khấu rực rỡ, MC cầm mic… nhưng âm thanh bỗng trục trặc. Giây phút ấy, mọi nỗ lực
      tổ chức có thể “đổ bể” chỉ vì một chi tiết tưởng chừng rất nhỏ: thiết bị. Đó là lý do vì sao dịch vụ cho thuê thiết bị sự kiện tại Viet Phan không chỉ đơn thuần là cung cấp
      máy móc, mà là giải pháp giữ nhịp thành công cho mỗi chương trình. Với kinh nghiệm thực chiến và quy trình vận hành chuẩn chỉ, chúng tôi luôn sẵn sàng đồng hành phía sau ánh
      đèn sân khấu để mọi khoảnh khắc diễn ra suôn sẻ, ấn tượng và đáng nhớ.
    </p>
    <!-- Button Read More -->
    <button @click="openModal('content-event-equipment-rental')"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
      {{ __('Read More') }}
    </button>
  </div>
</div>
