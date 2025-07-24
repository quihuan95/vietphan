<!-- Footer -->
<footer class="bg-[#1a1a2e] text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-6 gap-8">
      <!-- Company Information -->
      <div class="md:col-span-4">
        <div class="flex items-center space-x-3 mb-4">
          <img src="{{ asset('images/vietphan_trang.png') }}" alt="VIET PHAN Logo" class="h-[100px]">
        </div>
        <p class="text-gray-400 leading-relaxed mb-4">
          {{ __('VietPhan provides equipment and complete solutions for conferences, seminars, events and group tours. We consult, survey, and deploy equipment: audio, lighting, screens, interpretation booths, exhibition counters, check-in equipment, shuttle vehicles, outdoor supplies and supporting technology.') }}
        </p>
        <p class="text-gray-400 mb-2 font-semibold">{{ __('VIET PHAN SERVICES AND TRADING COMPANY LIMITED') }}</p>
        <p class="text-gray-400 mb-4">{{ __('Business License issued on 30/05/2019') }}</p>
      </div>

      <!-- Quick Links -->
      <div class="md:col-span-2">
        <h4 class="text-lg font-semibold mb-4">{{ __('Quick Links') }}</h4>
        <ul class="space-y-2 text-gray-400">
          <li><button @click="scrollToSection('about')" class="hover:text-white transition-colors">{{ __('About VietPhan') }}</button></li>
          <li><button @click="scrollToSection('services')" class="hover:text-white transition-colors">{{ __('Our Services') }}</button></li>
          <li><button @click="scrollToSection('process')" class="hover:text-white transition-colors">{{ __('Our Process') }}</button></li>
          <li><button @click="scrollToSection('projects')" class="hover:text-white transition-colors">{{ __('Completed Projects') }}</button></li>
          <li><button @click="scrollToSection('partners')" class="hover:text-white transition-colors">{{ __('Partners - Customers') }}</button></li>
        </ul>
      </div>
    </div>

    <div class="border-t border-gray-800 mt-8 pt-6 text-center text-gray-400">
      © <span x-text="new Date().getFullYear()"></span> {{ __('VIET PHAN SERVICES AND TRADING COMPANY LIMITED') }}. {{ __('All Rights Reserved') }}.
    </div>
  </div>
</footer>
