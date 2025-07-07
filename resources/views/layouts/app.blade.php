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
  <script>
    function landingPage() {
      return {
        isMenuOpen: false,
        currentTestimonial: 0,
        stats: {
          experience: 0,
          customers: 0,
          transactions: 0
        },
        testimonials: [{
            name: 'Hoàng Minh Tuấn',
            company: 'Giám đốc, Công ty Xuất nhập khẩu An Phát',
            content: 'VIET PHAN đã hỗ trợ chúng tôi rất tốt trong việc mở rộng thị trường quốc tế. Dịch vụ chuyên nghiệp và tận tâm.',
            image: 'https://i.pravatar.cc/150?u=hoangminhtuan'
          },
          {
            name: 'Lê Thuỳ Trang',
            company: 'Trưởng phòng Marketing, Tập đoàn Vinafood',
            content: 'Nhờ có VIET PHAN, chúng tôi đã tìm được nhiều đối tác uy tín và thực hiện được nhiều giao dịch thành công.',
            image: 'https://i.pravatar.cc/150?u=lethuytrang'
          },
          {
            name: 'Trần Quốc Bảo',
            company: 'CEO, Thời trang GIA HUY',
            content: 'Đội ngũ tư vấn của VIET PHAN rất chuyên nghiệp, luôn đưa ra những giải pháp tối ưu cho doanh nghiệp.',
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
            this.message = 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.';
            this.messageType = 'success';
            this.showMessage = true;

            // Hide message after 5 seconds
            setTimeout(() => {
              this.showMessage = false;
            }, 5000);

          } catch (error) {
            this.message = 'Có lỗi xảy ra khi gửi tin nhắn. Vui lòng thử lại.';
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
</body>

</html>
