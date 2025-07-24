  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
    <div class="container mx-auto px-4 py-4">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
          <img src="{{ asset('images/vietphan.png') }}" alt="VIET PHAN Logo" class="h-[60px]">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
          <button @click="scrollToSection('about')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Giới thiệu') }}
          </button>
          <button @click="scrollToSection('services')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Danh mục dịch vụ cung cấp') }}
          </button>
          <button @click="scrollToSection('process')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Quy trình tư vấn') }}
          </button>
          <button @click="scrollToSection('blog')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Tin tức') }}
          </button>
          <button @click="scrollToSection('projects')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Dự án đã thực hiện') }}
          </button>
          <button @click="scrollToSection('partners')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Đối tác – Khách hàng') }}
          </button>
          <button @click="scrollToSection('contact')" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">
            {{ __('Liên hệ') }}
          </button>
        </nav>

        <!-- Language Switcher -->
        <div class="hidden md:flex items-center space-x-4">
          <div class="relative">
            <button @click="isLanguageOpen = !isLanguageOpen" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
              </svg>
              <span>{{ \App\Helpers\LanguageHelper::getCurrentLocaleName() }}</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            <!-- Language Dropdown -->
            <div x-show="isLanguageOpen" @click.away="isLanguageOpen = false" x-cloak x-transition
              class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50">
              <a href="{{ route('language.switch', 'en') }}"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ \App\Helpers\LanguageHelper::isCurrentLocale('en') ? 'bg-blue-50 text-blue-600' : '' }}">
                {{ __('English') }}
              </a>
              <a href="{{ route('language.switch', 'vi') }}"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ \App\Helpers\LanguageHelper::isCurrentLocale('vi') ? 'bg-blue-50 text-blue-600' : '' }}">
                {{ __('Vietnamese') }}
              </a>
            </div>
          </div>
        </div>

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
          <button @click="scrollToSection('about'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            {{ __('Giới thiệu') }}
          </button>
          <button @click="scrollToSection('services'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            {{ __('Danh mục dịch vụ cung cấp') }}
          </button>
          <button @click="scrollToSection('process'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            {{ __('Quy trình tư vấn') }}
          </button>
          <button @click="scrollToSection('projects'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            {{ __('Dự án đã thực hiện') }}
          </button>
          <button @click="scrollToSection('partners'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            {{ __('Đối tác – Khách hàng') }}
          </button>
          <button @click="scrollToSection('contact'); isMenuOpen = false" class="text-left text-gray-700 hover:text-blue-600 font-medium py-2">
            {{ __('Liên hệ') }}
          </button>

          <!-- Mobile Language Switcher -->
          <div class="pt-2 border-t">
            <div class="flex space-x-2">
              <a href="{{ route('language.switch', 'en') }}"
                class="px-3 py-2 text-sm rounded {{ \App\Helpers\LanguageHelper::isCurrentLocale('en') ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700' }}">
                {{ __('English') }}
              </a>
              <a href="{{ route('language.switch', 'vi') }}"
                class="px-3 py-2 text-sm rounded {{ \App\Helpers\LanguageHelper::isCurrentLocale('vi') ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700' }}">
                {{ __('Vietnamese') }}
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
