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
            <svg class="w-14 h-14 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16 6V5a4 4 0 10-8 0v1H4a1 1 0 00-1 1v10a2 2 0 002 2h10a2 2 0 002-2V7a1 1 0 00-1-1h-2zm-6-1a2 2 0 114 0v1h-4V5zm-2 3h8v9a1 1 0 01-1 1H5a1 1 0 01-1-1V8z" />
            </svg>
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
            <svg class="w-14 h-14 text-green-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.46-2.12A6.97 6.97 0 0017 10c0-.34-.02-.67-.05-1H13v2a1 1 0 01-1 1H8v2h2a1 1 0 011 1v2.88zM4.05 9A7.01 7.01 0 003 10c0 .34.02.67.05 1H7V9H4.05zm1.49-3.88A6.97 6.97 0 003 10c0 .34.02.67.05 1H7V9H4.05zm10.41 0A6.97 6.97 0 0017 10c0 .34-.02.67-.05 1H13V9h3.46zM10 2a8 8 0 00-7.95 7h3.46V7a1 1 0 011-1h2V4a1 1 0 011-1h2V2.05z"
                clip-rule="evenodd" />
            </svg>
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
            <svg class="w-14 h-14 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 2a1 1 0 112 0v1h3a1 1 0 01.97 1.243l-1.5 6A1 1 0 0112.5 11h-5a1 1 0 01-.97-1.243l1.5-6A1 1 0 018 3h3V2zM4 15a3 3 0 106 0H4zm6 0a3 3 0 106 0h-6z" />
            </svg>
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
            <svg class="w-14 h-14 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M18.364 5.636a4 4 0 00-5.657 0L10 8.343l-2.707-2.707a4 4 0 00-5.657 5.657l8.364 8.364a1 1 0 001.414 0l8.364-8.364a4 4 0 000-5.657z" />
            </svg>
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
            <svg class="w-14 h-14 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M18.364 5.636a4 4 0 00-5.657 0L10 8.343l-2.707-2.707a4 4 0 00-5.657 5.657l8.364 8.364a1 1 0 001.414 0l8.364-8.364a4 4 0 000-5.657z" />
            </svg>
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

  <section class="py-20 bg-slate-100">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('Our Process') }}</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
          {{ __('We provide diverse professional services to meet all customer needs') }}
        </p>
      </div>

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
    </div>
  </section>

  <!-- Statistics Section -->
  <section class="py-20 bg-blue-900 text-white" x-intersect.once="startCounters()">
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

  <!-- Testimonials Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('What Our Clients Say') }}</h2>
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
              <input x-model="form.name" type="text" :placeholder="__('Enter your name')"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Email') }} *</label>
              <input x-model="form.email" type="email" :placeholder="__('Enter your email')"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Message') }} *</label>
              <textarea x-model="form.message" rows="4" :placeholder="__('Enter your message')"
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
                <p class="text-gray-600">123 Business Street, Hanoi, Vietnam</p>
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
                <p class="text-gray-600">info@vietphan.com</p>
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
