<div class="container mx-auto" x-data="blogApp()">
  <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ __('Danh sách bài viết') }}</h1>

  <!-- Grid layout cho các card -->
  <!-- Slider layout cho các card bài viết -->
  <!-- Wrapper để canh chỉnh Swiper và các controls -->
  <div class="relative">
    <!-- Swiper -->
    <div class="swiper myBlogSwiper">
      <div class="swiper-wrapper">
        @if (App::getLocale() == 'vi')
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.vi.cabin-translation-equipment-rental')</div>
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.vi.event-equipment-rental')</div>
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.vi.online-conference-equipment-rental')</div>
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.vi.about-viet-phan')</div>
        @else
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.en.cabin-translation-equipment-rental')</div>
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.en.event-equipment-rental')</div>
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.en.online-conference-equipment-rental')</div>
          <div class="swiper-slide h-full mb-4">@include('pages.blog.posts.en.about-viet-phan')</div>
        @endif
      </div>
    </div>

    <!-- Pagination dưới slider -->
    <div class="swiper-pagination mt-6 translate-y-5"></div>

    <!-- Navigation buttons tách ra khỏi slider -->
    <div class="absolute -top-10 right-0 z-10 flex space-x-2">
      <div class="swiper-button-prev !static !text-gray-700 hover:!text-gray-900"></div>
      <div class="swiper-button-next !static !text-gray-700 hover:!text-gray-900"></div>
    </div>
  </div>

  <!-- Modal Popup -->
  <div x-show="showModal" x-transition.opacity.duration.300ms x-cloak class="fixed inset-0 bg-black/50 w-full h-full flex items-center justify-center z-50 p-4"
    @click.self="closeModal()" @keydown.escape.window="closeModal()">
    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
      class="bg-white rounded-lg h-[80vh] max-w-4xl w-full overflow-y-auto relative shadow-xl">
      <!-- Close button -->
      <button @click="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 z-10 bg-white rounded-full p-2 shadow-md">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>

      <!-- Modal content -->
      <div class="p-6" x-html="getContent(currentContent)"></div>
    </div>
  </div>

  <!-- Hidden blog contents for modal -->
  <div style="display:none">
    <div id="content-cabin-translation-equipment-rental">
      @if (App::getLocale() == 'vi')
        @include('pages.blog.content.vi.cabin-translation-equipment-rental')
      @else
        @include('pages.blog.content.en.cabin-translation-equipment-rental')
      @endif
    </div>

    <div id="content-event-equipment-rental">
      @if (App::getLocale() == 'vi')
        @include('pages.blog.content.vi.event-equipment-rental')
      @else
        @include('pages.blog.content.en.event-equipment-rental')
      @endif
    </div>

    <div id="content-online-conference-equipment-rental">
      @if (App::getLocale() == 'vi')
        @include('pages.blog.content.vi.online-conference-equipment-rental')
      @else
        @include('pages.blog.content.en.online-conference-equipment-rental')
      @endif
    </div>

    <div id="content-about-viet-phan">
      @if (App::getLocale() == 'vi')
        @include('pages.blog.content.vi.about-viet-phan')
      @else
        @include('pages.blog.content.en.about-viet-phan')
      @endif
    </div>
  </div>
</div>
<script>
  function blogApp() {
    return {
      showModal: false,
      currentContent: '',

      openModal(id) {
        this.currentContent = id;
        this.showModal = true;
        document.body.style.overflow = 'hidden';
      },

      closeModal() {
        this.showModal = false;
        this.currentContent = '';
        document.body.style.overflow = 'auto';
      },

      getContent(id) {
        const el = document.getElementById(id);
        return el ? el.innerHTML : '';
      }
    }
  }
</script>
