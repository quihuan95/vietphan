@extends('layouts.app')
@section('content')
  <!-- Hero Section -->
  <section id="home" class="hero-bg min-h-screen flex items-center justify-center">
    <div class="text-center text-white px-4 max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight" x-data x-intersect="$el.classList.add('animate-fade-in-up')">
        {{ __('VIET PHAN SERVICES AND TRADING COMPANY LIMITED') }}
      </h1>
      <p class="text-xl md:text-2xl mb-8 font-light" x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
        {{ __('Professional consulting and equipment provision for Conferences - Events - Tourism') }}
      </p>
      <a href="tel:0918640988" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 text-lg rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
        {{ __('Contact Now') }}
      </a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('About VietPhan') }}</h2>
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
                    <p class="font-semibold">{{ __('Tax Code') }}:</p>
                    <p class="text-gray-600">0108763134</p>
                  </div>
                </div>
                <div class="flex items-center space-x-3">
                  <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4h3a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h3z"></path>
                  </svg>
                  <div>
                    <p class="font-semibold">{{ __('Operating Date') }}:</p>
                    <p class="text-gray-600">30/05/2019</p>
                  </div>
                </div>
                <div class="flex items-center space-x-3">
                  <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                  </svg>
                  <div>
                    <p class="font-semibold">{{ __('Representative') }}:</p>
                    <p class="text-gray-600">PHAN TIẾN QUYẾT</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              {{ __('VietPhan provides equipment and complete solutions for conferences, seminars, events and group tours. We consult, survey, and deploy equipment: audio, lighting, screens, interpretation booths, exhibition counters, check-in equipment, shuttle vehicles, outdoor supplies and supporting technology.') }}
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              {{ __('If you want to shorten it to just 1-2 slogan sentences, I can write more. Would you like to try?') }}
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
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('Our Services') }}</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
          {{ __('What We Do') }}
        </p>
      </div>

      <div class="flex flex-wrap justify-center gap-8">
        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Shopping Bag Solid Icon -->
            <img src="{{ asset('images/icon_a_minh-01.png') }}" class="h-[150px] object-contain" alt="Shopping Bag Solid Icon">
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">{{ __('Conference Equipment') }}</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>{{ __('Provide audio - lighting - projection solutions') }}</li>
            <li>{{ __('Rent and install parallel interpretation booths, interpretation microphones, synchronized headphone systems') }}</li>
            <li>{{ __('Install LED screens, projectors, large projection screens') }}</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Globe Solid Icon -->
            <img src="{{ asset('images/icon_a_minh-02.png') }}" class="h-[150px] object-contain" alt="Globe Solid Icon">
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">{{ __('Event Equipment') }}</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>{{ __('Rent tents, canopies, umbrellas, stage backdrops, podiums, red carpets, delegate tables and chairs') }}</li>
            <li>{{ __('Rent and install parallel interpretation booths, interpretation microphones, synchronized headphone systems') }}</li>
            <li>{{ __('Install LED screens, projectors, large projection screens') }}</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Scale Solid Icon -->
            <img src="{{ asset('images/icon_a_minh-03.png') }}" class="h-[150px] object-contain" alt="Scale Solid Icon">
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">{{ __('Tour Equipment') }}</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>{{ __('Consult on transportation, shuttle vehicles, vehicles serving international guests') }}</li>
            <li>{{ __('Team building equipment') }}</li>
            <li>{{ __('Provide group identification items: lanyards, name tags, backpacks, travel hats, bags, water bottles...') }}</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Handshake Solid Icon -->
            <img src="{{ asset('images/icon_a_minh-04.png') }}" class="h-[150px] object-contain" alt="Handshake Solid Icon">
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">{{ __('Complete Solution Consulting') }}</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>{{ __('Suggest equipment by event type: opening, international conference, gala dinner, exhibition, training...') }}</li>
            <li>{{ __('Survey locations, develop optimal equipment layout plans according to space') }}</li>
            <li>{{ __('Cost estimation and equipment list provision according to actual needs') }}</li>
          </ul>
        </div>

        <div
          class="w-full md:w-[50%] xl:w-[30%] max-w-[360px] bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
          <div class="flex justify-center mb-4">
            <!-- Handshake Solid Icon -->
            <img src="{{ asset('images/icon_a_minh-05.png') }}" class="h-[150px] object-contain" alt="Handshake Solid Icon">
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">{{ __('Technology Solution Consulting') }}</h3>
          <ul class="text-gray-600 leading-relaxed list-disc text-start ml-5">
            <li>{{ __('QR check-in system, conference management software') }}</li>
            <li>{{ __('Livestream cameras, event recording & filming, event recap videos') }}</li>
            <li>{{ __('Hybrid meeting equipment (Zoom connection...).') }}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="blog" class="py-20">
    @include('pages.blog.index')
  </section>
  <section id="process" class="py-20 bg-slate-100">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('Our Process') }}</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
          {{ __('We provide diverse professional services to meet all customer needs') }}
        </p>
      </div>

      @if (Config::get('app.locale') == 'vi')
        <div class="flex flex-wrap justify-center gap-4">
          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web-01.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web-02.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web-03.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web-04.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web-05.png') }}" alt="">
          </div>
        </div>
      @elseif (Config::get('app.locale') == 'en')
        <div class="flex flex-wrap justify-center gap-4">
          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web_ta-01.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web_ta-02.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web_ta-03.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web_ta-04.png') }}" alt="">
          </div>

          <div class="w-full md:w-[50%] xl:w-[33%] max-w-[380px] transition-all duration-300 transform hover:-translate-y-2 text-center">
            <img src="{{ asset('images/anh_web_ta-05.png') }}" alt="">
          </div>
        </div>
      @endif
    </div>
  </section>

  <!-- Statistics Section -->
  <section id="projects" class="py-20 bg-blue-900 text-white" x-intersect.once="startCounters()">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ __('Statistics') }}</h2>
        <div class="w-24 h-1 bg-orange-500 mx-auto"></div>
      </div>

      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div>
          <div class="text-5xl md:text-6xl font-bold text-orange-400 mb-2" x-text="stats.experience + '+'"></div>
          <p class="text-xl font-semibold mb-2">{{ __('Years of Experience') }}</p>
          <p class="text-blue-200">{{ __('Professional and dedicated service') }}</p>
        </div>
        <div>
          <div class="text-5xl md:text-6xl font-bold text-orange-400 mb-2" x-text="stats.customers + '+'"></div>
          <p class="text-xl font-semibold mb-2">{{ __('Satisfied Customers') }}</p>
          <p class="text-blue-200">{{ __('Trust and accompany') }}</p>
        </div>
        <div>
          <div class="text-5xl md:text-6xl font-bold text-orange-400 mb-2" x-text="stats.transactions.toLocaleString() + '+'"></div>
          <p class="text-xl font-semibold mb-2">{{ __('Successful Transactions') }}</p>
          <p class="text-blue-200">{{ __('Ensure high quality') }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Customer Partners Section -->
  <section id="partners" class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">{{ __('customer_partners_title') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          {{ __('customer_partners_desc') }}
        </p>
      </div>

      <!-- Swiper Slider -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/1.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/2.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/3.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/4.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/4.1.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/5.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/6.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/7.jpg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/8.1.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/8.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/9.jpg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/9.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/10.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/11.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/12.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/13.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/14.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/15.jpg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/16.jpeg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('Contact Us') }}</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
          {{ __('Leave your information so we can support you in the best way') }}
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-xl p-8">
          <h3 class="text-2xl font-semibold mb-6 text-gray-900">{{ __('Send Message') }}</h3>
          <form @submit.prevent="submitForm()" class="space-y-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Name') }} *</label>
              <input x-model="form.name" type="text" placeholder="{{ __('Enter your name') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Email') }} *</label>
              <input x-model="form.email" type="email" placeholder="{{ __('Enter your email') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Message') }} *</label>
              <textarea x-model="form.message" rows="4" placeholder="{{ __('Enter your message') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
            </div>
            <button type="submit" :disabled="isSubmitting"
              class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors disabled:opacity-50">
              <span x-show="!isSubmitting">{{ __('Submit') }}</span>
              <span x-show="isSubmitting">{{ __('Please wait') }}</span>
            </button>
          </form>

          <!-- Success/Error Message -->
          <div x-show="showMessage" x-transition class="mt-6 p-4 rounded-lg" :class="messageType === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'">
            <p x-text="message"></p>
          </div>
        </div>

        <!-- Contact Information -->
        <div class="bg-white rounded-lg shadow-xl p-8">
          <h3 class="text-2xl font-semibold mb-6 text-gray-900">{{ __('Contact Information') }}</h3>
          <div class="space-y-6">
            <div class="flex items-start space-x-4">
              <div class="flex-shrink-0">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                  </path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">{{ __('Address') }}</h4>
                <p class="text-gray-600">Số 32 Hào Nam, Phường Ô Chợ Dừa, Hà Nội, Việt Nam</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="flex-shrink-0">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                  </path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">{{ __('Phone Number') }}</h4>
                <p class="text-gray-600">+84 918 640 988</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="flex-shrink-0">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">{{ __('Email Address') }}</h4>
                <p class="text-gray-600">vietphan.tourism@gmail.com</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="flex-shrink-0">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">{{ __('Working Hours') }}</h4>
                <p class="text-gray-600">{{ __('Monday to Friday') }}: 8:00 - 18:00</p>
                <p class="text-gray-600">{{ __('Saturday') }}: 8:00 - 12:00</p>
                <p class="text-gray-600">{{ __('Sunday') }}: {{ __('Closed') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
