<x-none-layout>
  <!-- This example requires Tailwind CSS v2.0+ -->
  @if (Auth::check())
    @include('components.user.header.header-in')
  @else
    @include('components.user.header.header-out')
  @endif
  <div class="block bg-white overflow-hidden">
    <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
        <div class="sm:max-w-lg">
          <h1 class="text-4xl font font-bold tracking-tight text-gray-900 sm:text-6xl">
            Temukan Bumbu Masakan Rahasia Terbaikmu
          </h1>
          <p class="mt-4 text-xl text-gray-500">Dari bumbu kuliner hingga rempah-rempah dan rempah-rempah,
            Spiceso memiliki bahan-bahan organik tanpa pengawet untuk meningkatkan cita rasa masakan Anda.
          </p>
        </div>
        <div>
          <div class="mt-10">
            <!-- Decorative image grid -->
            <div aria-hidden="true"
              class="overflow-hidden pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
              <div
                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                      <img src="{{ asset('/img/sp/1.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                    </div>
                  </div>
                  <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="w-44 h-64 rounded-lg overflow-hidden">
                      <img src="{{ asset('/img/sp/4.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="w-44 h-64 rounded-lg overflow-hidden">
                      <img src="{{ asset('/img/sp/5.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                    </div>
                  </div>
                  <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="w-44 h-64 rounded-lg overflow-hidden">
                      <img src="{{ asset('/img/sp/6.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="w-44 h-64 rounded-lg overflow-hidden">
                      <img src="{{ asset('/img/sp/7.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="{{ route('products') }}"
              class="inline-block text-center bg-sp-primary-100 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-sp-primary-300">Belanja
              Sekarang
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Category Product Section --}}
  <div class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
        <h2 class="text-3xl font-bold text-gray-900">Temukan Produk dari Kategori</h2>

        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
          <div class="group relative">
            <div
              class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="{{ asset('/img/sp/category-1.png') }}"
                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Ketahanan < 1 Minggu </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Rempah-rempah dan Bumbu</p>
          </div>

          <div class="group relative">
            <div
              class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="{{ asset('/img/sp/category-2.png') }}"
                alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Ketahanan 1-2 Minggu
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Penyedap</p>
          </div>

          <div class="group relative">
            <div
              class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="{{ asset('/img/sp/category-3.png') }}"
                alt="Collection of four insulated travel bottles on wooden shelf."
                class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Ketahanan > 2 Minggu
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Bumbu Masakan</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Product Section -->
  <div class="bg-white">
    <div class="max-w-3xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900">Jelajahi Produk Kami</h2>

      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div
            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="{{ asset('/img/sp/category-3.png') }}" alt="Front of men&#039;s Basic Tee in black."
              class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Rempah-rempah dan Bumbu
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Spicy Chilly</p>
            </div>
            <p class="text-sm font-medium text-gray-900">Rp 25.000</p>
          </div>
          <a href="#"
            class="
              mt-4
              w-full
              bg-transparent
              border border-sp-primary-100
              rounded-md
              py-3
              px-8
              flex
              items-center
              justify-center
              text-lg
              leading-6
              font-medium
              text-sp-primary-100
              hover:bg-sp-primary-50
              md:px-10
            ">
            Beli
          </a>
        </div>

        <!-- More products... -->
      </div>
    </div>
  </div>

  <!-- Alternating Feature Sections -->
  <div class="bg-white relative pt-16 pb-32 lg:overflow-hidden">
    <div aria-hidden="true"
      class="
        absolute
        inset-x-0
        top-0
        h-48
        bg-gradient-to-b
        to-gray-100
      ">
    </div>
    <div class="relative">
      <div
        class="
          lg:mx-auto
          lg:max-w-7xl
          lg:px-8
          lg:grid
          lg:grid-cols-2
          lg:grid-flow-col-dense
          lg:gap-24
        ">
        <div
          class="
            px-4
            max-w-xl
            mx-auto
            sm:px-6
            lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2
          ">
          <div>
            <div>
              <span
                class="
                  h-12
                  w-12
                  rounded-md
                  flex
                  items-center
                  justify-center
                  bg-gradient-to-r
                  from-sp-primary-100
                  to-sp-primary-200
                ">
                <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/sparkles"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                  </path>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h2
                class="
                  text-3xl
                  font-bold
                  tracking-tight
                  text-gray-900
                ">
                Pilihan untuk Kebutuhanmu
              </h2>
              <p class="mt-4 text-lg text-gray-500">
                Bumbu dan rempah pilihan yang diolah dengan sepenuh hati serta
                dijamin enak, praktis dan tanpa 3P (Pengawet, Pewarna dan Perasa Buatan)
              </p>
              <div class="mt-6">
                <a href="{{ route('user.register') }}"
                  class="
                    inline-flex
                    px-4
                    py-2
                    border border-transparent
                    text-base
                    font-medium
                    rounded-md
                    shadow-sm
                    text-white
                    bg-gradient-to-r
                    from-sp-primary-100
                    to-sp-primary-200
                    hover:from-sp-primary-300 hover:to-sp-primary-400
                  ">
                  Belanja Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
          <div
            class="
              pr-4
              -ml-48
              sm:pr-6
              md:-ml-16
              lg:px-0 lg:m-0 lg:relative lg:h-full
            ">
            <img
              class="
                w-full
                rounded-xl
                shadow-xl
                ring-1 ring-black ring-opacity-5
                lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none
              "
              src="{{ asset('/img/bg-banner.png') }}" alt="Customer profile user interface" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Split brand panel -->
  <div class="relative bg-white">
    <div class="absolute inset-0" aria-hidden="true">
      <div
        class="
          absolute
          inset-y-0
          right-0
          w-1/2
          bg-gradient-to-r
          from-sp-primary-200
          to-sp-primary-300
        ">
      </div>
    </div>
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-2 lg:px-8">
      <div class="bg-white py-16 px-4 sm:py-24 sm:px-6 lg:px-0 lg:pr-8">
        <div class="max-w-lg mx-auto lg:mx-0">
          <h2
            class="
              text-base
              font-semibold
              tracking-wide
              text-sp-primary-300
              uppercase
            ">
            Mengapa Membeli Spiceso?
          </h2>
          <p class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl">
            Penuhi kebutuhan tanpa khawatir terkait rasa dan kesehatan tubuh mu.
          </p>
          <dl class="mt-12 space-y-10">
            <div class="flex">
              <div
                class="
                  flex-shrink-0
                  h-12
                  w-12
                  bg-gradient-to-r
                  from-sp-primary-200
                  to-sp-primary-300
                  rounded-md
                  flex
                  items-center
                  justify-center
                ">
                <svg class="h-4 w-4 text-white" x-description="Heroicon name: outline/view-list"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
              </div>
              <div class="ml-4">
                <dt class="text-xl leading-6 font-medium text-gray-900">
                  Halal MUI & Tersertifikasi BPOM
                </dt>
              </div>
            </div>

            <div class="flex">
              <div
                class="
                  flex-shrink-0
                  h-12
                  w-12
                  bg-gradient-to-r
                  from-sp-primary-200
                  to-sp-primary-300
                  rounded-md
                  flex
                  items-center
                  justify-center
                ">
                <svg class="h-4 w-4 text-white" x-description="Heroicon name: outline/view-boards"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2">
                  </path>
                </svg>
              </div>
              <div class="ml-4">
                <dt class="text-xl leading-6 font-medium text-gray-900">
                  Tanpa 3P (Pengawet, Penguat Rasa, Pewarna Sintesis)
                </dt>
              </div>
            </div>

            <div class="flex">
              <div
                class="
                  flex-shrink-0
                  h-12
                  w-12
                  bg-gradient-to-r
                  from-sp-primary-200
                  to-sp-primary-300
                  rounded-md
                  flex
                  items-center
                  justify-center
                ">
                <svg class="h-4 w-4 text-white" x-description="Heroicon name: outline/calendar"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                  </path>
                </svg>
              </div>
              <div class="ml-4">
                <dt class="text-xl leading-6 font-medium text-gray-900">
                  Bervariasi dengan Masa Ketahanan
                </dt>
              </div>
            </div>

            <div class="flex">
              <div
                class="
                  flex-shrink-0
                  h-12
                  w-12
                  bg-gradient-to-r
                  from-sp-primary-200
                  to-sp-primary-300
                  rounded-md
                  flex
                  items-center
                  justify-center
                ">
                <svg class="h-4 w-4 text-white" x-description="Heroicon name: outline/users"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                  </path>
                </svg>
              </div>
              <div class="ml-4">
                <dt class="text-xl leading-6 font-medium text-gray-900">
                  Buatan Lokal
                </dt>
              </div>
            </div>
          </dl>
        </div>
      </div>
      <div
        class="
          bg-gradient-to-r
          from-sp-primary-200
          to-sp-primary-300
          py-16
          px-4
          sm:py-24 sm:px-6
          lg:bg-none lg:flex lg:items-center lg:justify-end lg:px-0 lg:pl-8
        ">
        <div class="max-w-lg mx-auto w-full space-y-8 lg:mx-0">
          <div>
            <h2 class="sr-only">Harga</h2>
            <p class="relative grid grid-cols-1">
              <span class="flex flex-col text-center">
                <span class="text-5xl font-bold text-white tracking-tight">Hanya Rp 125.000</span>
              </span>
            </p>
          </div>
          <a href="#">
            <img class="w-full mt-2" src="{{ asset('/img/sp/pack.png') }}" alt="" />
          </a>
          <a href="{{ route('user.register') }}"
            class="
              w-full
              bg-white
              border border-transparent
              rounded-md
              py-4
              px-8
              flex
              items-center
              justify-center
              text-lg
              leading-6
              font-medium
              text-sp-primary-400
              hover:bg-sp-primary-50
              md:px-10
            ">
            Mulai Belanja
          </a>
          <a href="{{ route('user.register') }}"
            class="
              block
              text-center text-base
              font-medium
              text-sp-primary-50
              hover:text-white
            ">
            Paket Lengkap Masakan Enak & Sehat
          </a>
        </div>
      </div>
    </div>
  </div>

  @include('components.user.footer.footer')
</x-none-layout>
