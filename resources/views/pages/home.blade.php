@extends('layouts.app')
@section('content')
  <!-- Hero Section -->
  <section id="home" class="hero-bg min-h-screen flex items-center justify-center">
    <div class="text-center text-white px-4 max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight" x-data x-intersect="$el.classList.add('animate-fade-in-up')">
        VIET PHAN SERVICES AND TRADING COMPANY LIMITED
      </h1>
      <p class="text-xl md:text-2xl mb-8 font-light" x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
        Tư vấn & Cung cấp thiết bị chuyên dụng cho Hội nghị – Sự kiện – Du lịch
      </p>
      <a href="tel:0918640988" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 text-lg rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
        Liên hệ ngay
      </a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Giới thiệu về VIET PHAN</h2>
          <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="space-y-4">
                <div class="flex items-center space-x-3">
                  <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <div>
                    <p class="font-semibold">Mã số thuế:</p>
                    <p class="text-gray-600">0108763134</p>
                  </div>
                </div>
                <div class="flex items-center space-x-3">
                  <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4h3a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h3z"></path>
                  </svg>
                  <div>
                    <p class="font-semibold">Ngày hoạt động:</p>
                    <p class="text-gray-600">30/05/2019</p>
                  </div>
                </div>
                <div class="flex items-center space-x-3">
                  <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                  </svg>
                  <div>
                    <p class="font-semibold">Đại diện:</p>
                    <p class="text-gray-600">PHAN TIẾN QUYẾT</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              VietPhan cung cấp thiết bị và giải pháp trọn gói cho hội nghị, hội thảo, sự kiện và du lịch đoàn. Chúng tôi tư vấn, khảo sát, triển khai các thiết bị: âm thanh, ánh
              sáng, màn hình, cabin dịch, quầy triển lãm, thiết bị check-in, xe đưa đón, vật tư ngoài trời và công nghệ hỗ trợ.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              Nếu bạn muốn rút gọn thành chỉ 1-2 câu slogan, tôi có thể viết thêm. Bạn có muốn thử không?
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Dịch vụ của chúng tôi</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Chúng tôi cung cấp đa dạng các dịch vụ chuyên nghiệp để đáp ứng mọi nhu cầu của khách hàng
        </p>
      </div>

      <div class="flex flex-wrap justify-center gap-8">
        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Shopping Bag Solid Icon -->
            <svg class="w-14 h-14 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16 6V5a4 4 0 10-8 0v1H4a1 1 0 00-1 1v10a2 2 0 002 2h10a2 2 0 002-2V7a1 1 0 00-1-1h-2zm-6-1a2 2 0 114 0v1h-4V5zm-2 3h8v9a1 1 0 01-1 1H5a1 1 0 01-1-1V8z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Tư vấn thiết bị hội nghị chuyên nghiệp</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>Cung cấp giải pháp âm thanh – ánh sáng – trình chiếu</li>
            <li>Cho thuê và lắp đặt cabin dịch song song, micro phiên dịch, hệ thống tai nghe đồng bộ</li>
            <li>Lắp đặt màn hình LED, máy chiếu, màn chiếu khổ lớn</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Globe Solid Icon -->
            <svg class="w-14 h-14 text-green-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.46-2.12A6.97 6.97 0 0017 10c0-.34-.02-.67-.05-1H13v2a1 1 0 01-1 1H8v2h2a1 1 0 011 1v2.88zM4.05 9A7.01 7.01 0 003 10c0 .34.02.67.05 1H7V9H4.05zm1.49-3.88A6.97 6.97 0 003 10c0 .34.02.67.05 1H7V9H4.05zm10.41 0A6.97 6.97 0 0017 10c0 .34-.02.67-.05 1H13V9h3.46zM10 2a8 8 0 00-7.95 7h3.46V7a1 1 0 011-1h2V4a1 1 0 011-1h2V2.05z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Thiết bị tổ chức sự kiện ngoài trời & indoor</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>Cho thuê lều, nhà bạt, dù che, backdrop sân khấu, bục phát biểu, thảm đỏ, bàn ghế đại biểu</li>
            <li>Cho thuê và lắp đặt cabin dịch song song, micro phiên dịch, hệ thống tai nghe đồng bộ</li>
            <li>Lắp đặt màn hình LED, máy chiếu, màn chiếu khổ lớn</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Scale Solid Icon -->
            <svg class="w-14 h-14 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 2a1 1 0 112 0v1h3a1 1 0 01.97 1.243l-1.5 6A1 1 0 0112.5 11h-5a1 1 0 01-.97-1.243l1.5-6A1 1 0 018 3h3V2zM4 15a3 3 0 106 0H4zm6 0a3 3 0 106 0h-6z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Hỗ trợ thiết bị du lịch đoàn & MICE tour</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>Tư vấn phương tiện di chuyển, xe đưa đón đoàn, xe phục vụ khách quốc tế.</li>
            <li>Thiết bị tổ chức team-building</li>
            <li>Cung cấp bộ nhận diện đoàn: dây đeo, thẻ tên, balo, nón du lịch, túi xách, bình nước…</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Handshake Solid Icon -->
            <svg class="w-14 h-14 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M18.364 5.636a4 4 0 00-5.657 0L10 8.343l-2.707-2.707a4 4 0 00-5.657 5.657l8.364 8.364a1 1 0 001.414 0l8.364-8.364a4 4 0 000-5.657z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Tư vấn trọn gói giải pháp thiết bị sự kiện theo quy mô</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>Gợi ý thiết bị theo loại hình sự kiện: khai trương, hội thảo quốc tế, gala dinner, triễn lãm, training...</li>
            <li>Khảo sát địa điểm, lập phương án bố trí thiết bị tối ưu theo không gian.</li>
            <li>Dự toán chi phí và cung cấp bảng thiết bị theo nhu cầu thực tế.</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Handshake Solid Icon -->
            <svg class="w-14 h-14 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M18.364 5.636a4 4 0 00-5.657 0L10 8.343l-2.707-2.707a4 4 0 00-5.657 5.657l8.364 8.364a1 1 0 001.414 0l8.364-8.364a4 4 0 000-5.657z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Tư vấn giải pháp công nghệ trong sự kiện</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>Hệ thống check-in bằng QR, phần mềm quản lý hội nghị.</li>
            <li>Camera livestream, ghi hình & quay phim toàn sự kiện, video recap sự kiện</li>
            <li>Thiết bị họp hybrid (kết nối Zoom…).</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team Section -->
  <section id="team" class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Đội ngũ của chúng tôi</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
        <p class="text-gray-600 max-w-2xl mx-auto mt-4">Đội ngũ chuyên gia giàu kinh nghiệm, tận tâm và sáng tạo, luôn đồng hành cùng khách hàng trên mọi chặng đường phát triển.
        </p>
      </div>
      <div class="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto">
        <div class="bg-gray-50 rounded-lg shadow-lg p-8 text-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/960px-Unknown_person.jpg" alt="CEO"
            class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow">
          <h4 class="text-xl font-semibold text-gray-900 mb-1">Phan Tiến Quyết</h4>
          <p class="text-blue-600 mb-2">Giám đốc điều hành</p>
          <p class="text-gray-600 text-sm">Hơn 10 năm kinh nghiệm trong lĩnh vực thương mại quốc tế và phát triển doanh nghiệp.</p>
        </div>
        <div class="bg-gray-50 rounded-lg shadow-lg p-8 text-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/960px-Unknown_person.jpg" alt="Manager"
            class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow">
          <h4 class="text-xl font-semibold text-gray-900 mb-1">Nguyễn Thị Mai</h4>
          <p class="text-blue-600 mb-2">Trưởng phòng Kinh doanh</p>
          <p class="text-gray-600 text-sm">Chuyên gia tư vấn chiến lược, kết nối đối tác và phát triển thị trường.</p>
        </div>
        <div class="bg-gray-50 rounded-lg shadow-lg p-8 text-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/960px-Unknown_person.jpg" alt="Tech Lead"
            class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow">
          <h4 class="text-xl font-semibold text-gray-900 mb-1">Lê Văn Hùng</h4>
          <p class="text-blue-600 mb-2">Trưởng phòng Công nghệ</p>
          <p class="text-gray-600 text-sm">Phụ trách giải pháp công nghệ, phát triển hệ thống đấu giá và kết nối trực tuyến.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners & Clients Section -->
  <section id="partners" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Đối tác & Khách hàng tiêu biểu</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
        <p class="text-gray-600 max-w-2xl mx-auto mt-4">Chúng tôi tự hào hợp tác với nhiều doanh nghiệp, tổ chức lớn trong và ngoài nước.</p>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-8 max-w-4xl mx-auto">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft" class="h-12">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg" alt="Nike" class="h-12">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" class="h-12">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png" alt="Google" class="h-12">
        <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/e/e4/Unilever.svg/929px-Unilever.svg.png" alt="Unilever" class="h-12">
      </div>
    </div>
  </section>

  {{-- <section id="events" class="py-20 bg-white text-[#17375e] section-gsap" x-data="sliderData()">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">{{ __('Sự kiện và Dự án Nổi bật') }}</h2>
        <p class="text-xl opacity-80 max-w-3xl mx-auto">
          {{ __('Những dự án thành công đã khẳng định uy tín và chất lượng dịch vụ của chúng tôi') }}
        </p>
      </div>

      <div class="relative max-w-6xl mx-auto">
        <div class="relative h-[500px] rounded-2xl overflow-hidden shadow-2xl lux-card">
          <template x-for="(slide, index) in slides" :key="index">
            <a :href="slide.link" target="_blank" x-show="currentSlide === index" x-transition:enter="transition ease-in-out duration-700"
              x-transition:enter-start="opacity-0 transform translate-x-full" x-transition:enter-end="opacity-100 transform translate-x-0"
              x-transition:leave="transition ease-in-out duration-700" x-transition:leave-start="opacity-100 transform translate-x-0"
              x-transition:leave-end="opacity-0 transform -translate-x-full" class="absolute inset-0">
              <img :src="slide.image" :alt="slide.caption" class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
              <div class="absolute bottom-8 left-8 right-8">
                <h3 class="text-white text-3xl md:text-4xl font-display font-bold mb-4" x-text="slide.caption"></h3>
                <p class="text-gray-200 text-lg max-w-2xl" x-text="slide.description"></p>
              </div>
            </a>
          </template>
        </div>

        <!-- Navigation Buttons -->
        <button x-on:click="prevSlide()"
          class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-4 shadow-lg transition-all">
          <i class="fas fa-chevron-left text-white"></i>
        </button>
        <button x-on:click="nextSlide()"
          class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-4 shadow-lg transition-all">
          <i class="fas fa-chevron-right text-white"></i>
        </button>

        <!-- Slide Indicators -->
        <div class="flex justify-center mt-8 space-x-3">
          <template x-for="(slide, index) in slides" :key="index">
            <button x-on:click="currentSlide = index" :class="index === currentSlide ? 'bg-[#ea903c] scale-125' : 'bg-gray-500'"
              class="w-4 h-4 rounded-full transition-all"></button>
          </template>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Statistics Section -->
  <section class="py-20 bg-blue-900 text-white" x-intersect.once="startCounters()">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Thành tựu của chúng tôi</h2>
        <div class="w-24 h-1 bg-orange-500 mx-auto"></div>
      </div>

      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div>
          <div class="text-5xl md:text-6xl font-bold text-orange-400 mb-2" x-text="stats.experience + '+'"></div>
          <p class="text-xl font-semibold mb-2">Năm kinh nghiệm</p>
          <p class="text-blue-200">Phục vụ khách hàng tận tâm</p>
        </div>
        <div>
          <div class="text-5xl md:text-6xl font-bold text-orange-400 mb-2" x-text="stats.customers + '+'"></div>
          <p class="text-xl font-semibold mb-2">Khách hàng</p>
          <p class="text-blue-200">Tin tưởng và đồng hành</p>
        </div>
        <div>
          <div class="text-5xl md:text-6xl font-bold text-orange-400 mb-2" x-text="stats.transactions.toLocaleString() + '+'"></div>
          <p class="text-xl font-semibold mb-2">Giao dịch thành công</p>
          <p class="text-blue-200">Đảm bảo chất lượng cao</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Khách hàng nói gì về chúng tôi</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
      </div>

      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-xl relative overflow-hidden">
          <div class="p-8 md:p-12 text-center">
            <img :src="testimonials[currentTestimonial].image" alt="Profile picture" class="w-24 h-24 rounded-full mx-auto mb-6 border-4 border-white shadow-lg">
            <p class="text-lg md:text-xl text-gray-700 mb-8 leading-relaxed italic">
              " <span x-text="testimonials[currentTestimonial].content"></span> "
            </p>
            <div class="pt-6">
              <p class="font-semibold text-gray-900 text-lg" x-text="testimonials[currentTestimonial].name"></p>
              <p class="text-blue-600" x-text="testimonials[currentTestimonial].company"></p>
            </div>
          </div>

          <button @click="prevTestimonial()" class="absolute left-4 top-1/2 transform -translate-y-1/2 p-2 rounded-full bg-white shadow-lg hover:bg-gray-50 transition-colors">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
          </button>
          <button @click="nextTestimonial()" class="absolute right-4 top-1/2 transform -translate-y-1/2 p-2 rounded-full bg-white shadow-lg hover:bg-gray-50 transition-colors">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>

        <div class="flex justify-center mt-6 space-x-2">
          <template x-for="(testimonial, index) in testimonials" :key="index">
            <button @click="currentTestimonial = index" :class="index === currentTestimonial ? 'bg-blue-600' : 'bg-gray-300'"
              class="w-3 h-3 rounded-full transition-colors"></button>
          </template>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Liên hệ với chúng tôi</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Hãy để lại thông tin để chúng tôi có thể hỗ trợ bạn một cách tốt nhất
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-xl p-8">
          <h3 class="text-2xl font-semibold mb-6 text-gray-900">Gửi tin nhắn cho chúng tôi</h3>
          <form @submit.prevent="submitForm()" class="space-y-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Họ tên *</label>
              <input x-model="form.name" type="text" placeholder="Nhập họ tên của bạn"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
              <input x-model="form.email" type="email" placeholder="Nhập địa chỉ email"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Nội dung *</label>
              <textarea x-model="form.message" placeholder="Nhập nội dung tin nhắn..." rows="5"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
            </div>
            <button type="submit" :disabled="isSubmitting"
              class="w-full bg-blue-600 hover:bg-blue-700 disabled:opacity-50 text-white py-3 rounded-lg font-semibold transition-colors">
              <span x-show="!isSubmitting">Gửi tin nhắn</span>
              <span x-show="isSubmitting" x-cloak>Đang gửi...</span>
            </button>
          </form>

          <div x-show="showMessage" x-cloak x-transition class="mt-4 p-4 rounded-lg"
            :class="messageType === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'">
            <p x-text="message"></p>
          </div>
        </div>

        <!-- Contact Information -->
        <div class="space-y-8">
          <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-start space-x-4">
              <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <div>
                <h4 class="font-semibold text-gray-900 mb-2">Địa chỉ</h4>
                <p class="text-gray-600 leading-relaxed">
                  Số 32 Hào Nam, Phường Ô Chợ Dừa,<br>
                  Quận Đống Đa, Thành phố Hà Nội, Việt Nam
                </p>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-start space-x-4">
              <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                </path>
              </svg>
              <div>
                <h4 class="font-semibold text-gray-900 mb-2">Điện thoại</h4>
                <p class="text-gray-600">
                  <a href="tel:0918640988" class="hover:text-blue-600 transition-colors">0918 640 988</a>
                </p>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-start space-x-4">
              <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <div>
                <h4 class="font-semibold text-gray-900 mb-2">Email</h4>
                <p class="text-gray-600">
                  <a href="mailto:vietphan.tourism@gmail.com" class="hover:text-blue-600 transition-colors">vietphan.tourism@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function sliderData() {
      return {
        currentSlide: 0,
        slides: [{
            caption: 'AIFEEX Gala Hà Nội 2025',
            description: 'Dưới ánh đèn rực rỡ của Trung tâm Hội nghị Quốc gia vào tối ngày 16/3, hơn 1.500 khách mời đã cùng nhau tạo nên một đêm hội đáng nhớ.',
            image: '{{ asset('images/slider/aifeex.png') }}',
            link: '#'
          },
          {
            caption: 'Tech Summit 2024',
            description: 'Sự kiện công nghệ quy tụ hơn 2.000 chuyên gia trong và ngoài nước với hơn 30 chuyên đề khác nhau.',
            image: '{{ asset('images/slider/techsummit.png') }}',
            link: '#'
          },
          {
            caption: 'Hội nghị Khách hàng Toàn quốc',
            description: 'Một dịp đặc biệt để tri ân đối tác và khách hàng chiến lược toàn quốc tại Đà Nẵng.',
            image: '{{ asset('images/slider/hoinghi.png') }}',
            link: '#'
          }
        ],
        nextSlide() {
          this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },
        prevSlide() {
          this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        }
      };
    }
  </script>
@endsection
