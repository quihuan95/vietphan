<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIET PHAN SERVICES AND TRADING COMPANY LIMITED</title>
  <meta name="description" content="VIET PHAN - Kết nối, Mua bán, Đấu giá toàn cầu">

  <!-- AlpineJS -->
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  @vite('resources/css/app.css')

  <!-- GSAP -->
  <!-- Custom Styles -->
  <style>
    [x-cloak] {
      display: none !important;
    }

    .hero-bg {
      background-image: linear-gradient(rgba(30, 58, 138, 0.8), rgba(29, 78, 216, 0.8)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>

<body class="font-sans antialiased" x-data="landingPage()">

  @include('layouts.header')

  @yield('content')

  @include('layouts.contact')

  @include('layouts.footer')
</body>

<script>
  function landingPage() {
    return {
      isMenuOpen: false,
      isLanguageOpen: false,
      currentTestimonial: 0,
      stats: {
        experience: 0,
        customers: 0,
        transactions: 0
      },
      testimonials: [{
          name: '{{ __('Hoàng Minh Tuấn') }}',
          company: '{{ __('Director, An Phat Import Export Company') }}',
          content: '{{ __('VIET PHAN has supported us very well in expanding international markets. Professional and dedicated service.') }}',
          image: 'https://i.pravatar.cc/150?u=hoangminhtuan'
        },
        {
          name: '{{ __('Lê Thuỳ Trang') }}',
          company: '{{ __('Marketing Manager, Vinafood Group') }}',
          content: '{{ __('Thanks to VIET PHAN, we have found many reputable partners and completed many successful transactions.') }}',
          image: 'https://i.pravatar.cc/150?u=lethuytrang'
        },
        {
          name: '{{ __('Trần Quốc Bảo') }}',
          company: '{{ __('CEO, GIA HUY Fashion') }}',
          content: '{{ __("VIET PHAN\'s consulting team is very professional, always providing optimal solutions for businesses.") }}',
          image: 'https://i.pravatar.cc/150?u=tranqocbao'
        }
      ],
      form: {
        name: '',
        email: '',
        message: ''
      },
      isSubmitting: false,
      showMessage: false,
      message: '',
      messageType: 'success',

      scrollToSection(sectionId) {
        const element = document.getElementById(sectionId);
        if (element) {
          element.scrollIntoView({
            behavior: 'smooth'
          });
        }
      },

      startCounters() {
        const duration = 2000;
        const steps = 60;
        const stepDuration = duration / steps;

        let currentStep = 0;
        const timer = setInterval(() => {
          currentStep++;
          const progress = currentStep / steps;

          this.stats = {
            experience: Math.floor(5 * progress),
            customers: Math.floor(500 * progress),
            transactions: Math.floor(1000 * progress)
          };

          if (currentStep >= steps) {
            clearInterval(timer);
            this.stats = {
              experience: 5,
              customers: 500,
              transactions: 1000
            };
          }
        }, stepDuration);
      },

      nextTestimonial() {
        this.currentTestimonial = (this.currentTestimonial + 1) % this.testimonials.length;
      },

      prevTestimonial() {
        this.currentTestimonial = (this.currentTestimonial - 1 + this.testimonials.length) % this.testimonials.length;
      },

      async submitForm() {
        this.isSubmitting = true;

        try {
          // Simulate form submission
          await new Promise(resolve => setTimeout(resolve, 1000));

          // Reset form
          this.form = {
            name: '',
            email: '',
            message: ''
          };

          // Show success message
          this.message = '{{ __('Thank you for contacting us! We will respond as soon as possible.') }}';
          this.messageType = 'success';
          this.showMessage = true;

          // Hide message after 5 seconds
          setTimeout(() => {
            this.showMessage = false;
          }, 5000);

        } catch (error) {
          this.message = '{{ __('An error occurred while sending the message. Please try again.') }}';
          this.messageType = 'error';
          this.showMessage = true;

          setTimeout(() => {
            this.showMessage = false;
          }, 5000);
        } finally {
          this.isSubmitting = false;
        }
      },

      init() {
        // Auto-rotate testimonials every 5 seconds
        setInterval(() => {
          this.nextTestimonial();
        }, 5000);
      }
    }
  }
</script>

</html>
