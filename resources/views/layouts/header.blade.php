  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
    <div class="container mx-auto px-4 py-4">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
          <img src="{{ asset('images/vietphan.png') }}" alt="VIET PHAN Logo" class="h-[60px] rounded-lg">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
          <a href="{{ route('home.index') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Trang chủ
          </a>
          <button @click="scrollToSection('about')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Giới thiệu
          </button>
          <button @click="scrollToSection('services')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Danh mục dịch vụ cung cấp
          </button>
          <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Quy trình tư vấn
          </a>
          <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Dự án đã thực hiện
          </a>
          <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Đối tác – Khách hàng
          </a>
          <button @click="scrollToSection('contact')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            Liên hệ
          </button>
        </nav>

        <!-- Mobile Menu Button -->
        <button @click="isMenuOpen = !isMenuOpen" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
          <svg x-show="!isMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <svg x-show="isMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile Navigation -->
      <nav x-show="isMenuOpen" x-cloak x-transition class="md:hidden mt-4 pb-4 border-t pt-4">
        <div class="flex flex-col space-y-3">
          <button @click="scrollToSection('home'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            Trang chủ
          </button>
          <button @click="scrollToSection('about'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            Giới thiệu
          </button>
          <button @click="scrollToSection('services'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            Dịch vụ
          </button>
          <button @click="scrollToSection('contact'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            Liên hệ
          </button>
        </div>
      </nav>
    </div>
  </header>
