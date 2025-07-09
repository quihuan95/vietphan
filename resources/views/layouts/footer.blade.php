<!-- Footer -->
<footer class="bg-[#1a1a2e] text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-6 gap-8">
      <!-- Giới thiệu -->
      <div class="md:col-span-4">
        <div class="flex items-center space-x-3 mb-4">
          <img src="{{ asset('images/vietphan_trang.png') }}" alt="VIET PHAN Logo" class="h-[100px] rounded-lg">
        </div>
        <p class="text-gray-400 leading-relaxed mb-4">
          VietPhan là đơn vị chuyên tư vấn và cung cấp giải pháp thiết bị phục vụ tổ chức hội nghị, sự kiện và hoạt động du lịch đoàn thể. Với kinh nghiệm thực tiễn trong ngành
          MICE, chúng tôi giúp khách hàng lựa chọn, tối ưu và triển khai các nhóm thiết bị như âm thanh – ánh sáng, trình chiếu, cabin dịch, phương tiện vận chuyển, vật tư sân
          khấu... đảm bảo chuyên nghiệp, hiệu quả và phù hợp ngân sách cho từng quy mô sự kiện.
        </p>
        <p class="text-gray-400 mb-2 font-semibold">CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ VIỆT PHAN</p>
        <p class="text-gray-400 mb-4">Giấy phép ĐKKD cấp ngày 30/05/2019</p>
      </div>

      <!-- Liên kết nhanh -->
      <div class="md:col-span-2">
        <h4 class="text-lg font-semibold mb-4">Liên kết nhanh</h4>
        <ul class="space-y-2 text-gray-400">
          <li><button @click="scrollToSection('about')" class="hover:text-white transition-colors">Giới thiệu về VIET PHAN</button></li>
          <li><button @click="scrollToSection('services')" class="hover:text-white transition-colors">Dịch vụ của chúng tôi</button></li>
          <li><button @click="scrollToSection('process')" class="hover:text-white transition-colors">Quy trình tư vấn & Cung cấp thiết bị của chúng tôi</button></li>
          <li><button @click="scrollToSection('projects')" class="hover:text-white transition-colors">Dự án đã thực hiện</button></li>
          <li><button @click="scrollToSection('partners')" class="hover:text-white transition-colors">Đối tác - Khách hàng</button></li>
        </ul>
      </div>
    </div>

    <div class="border-t border-gray-800 mt-8 pt-6 text-center text-gray-400">
      © <span x-text="new Date().getFullYear()"></span> VIET PHAN SERVICES AND TRADING COMPANY LIMITED. Tất cả quyền được bảo lưu.
    </div>
  </div>
</footer>
