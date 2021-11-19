<html>

<head>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer=""></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://tailwindui.com/css/components-v2.css" />
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>

<body>
  <div _style="max-height: 800px;" _class="overflow-y-auto">
    <div class="bg-white">
      <header>
        <div x-data="{ mobileMenuOpen: false }" class="bg-white">
          <div class="
                flex
                justify-between
                items-center
                max-w-7xl
                mx-auto
                px-4
                py-6
                sm:px-6
                md:justify-start md:space-x-10
                lg:px-8
              ">
            <div class="flex justify-start lg:w-0 lg:flex-1">
              <a href="#">
                <span class="sr-only">Workflow</span>
                <img class="h-14 w-auto sm:h-16"
                  src="{{ asset('/img/logo-sp.png') }}" alt="" />
              </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
              <button @click="mobileMenuOpen = true" type="button" class="
                    bg-white
                    rounded-md
                    p-2
                    inline-flex
                    items-center
                    justify-center
                    text-gray-400
                    hover:text-gray-500 hover:bg-gray-100
                    focus:outline-none
                    focus:ring-2
                    focus:ring-inset
                    focus:ring-indigo-500
                  ">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                  </path>
                </svg>
              </button>
            </div>
            <nav class="hidden md:flex space-x-10">
              <div @click.away="flyoutMenuOpen = false" x-data="{ flyoutMenuOpen: false }" class="relative">
                <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" x-state:on="Item active"
                  x-state:off="Item inactive"
                  :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }" class="
                      group
                      bg-white
                      rounded-md
                      text-gray-500
                      inline-flex
                      items-center
                      text-base
                      font-medium
                      hover:text-gray-900
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-indigo-500
                    ">
                  <span>Solutions</span>
                  <svg x-state:on="Item active" x-state:off="Item inactive" class="
                        ml-2
                        h-5
                        w-5
                        text-gray-400
                        group-hover:text-gray-500
                      " x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }"
                    x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>

                <transition enter-active-class="transition ease-out duration-200" enter-class="opacity-0 translate-y-1"
                  enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150"
                  leave-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                  <div x-description="'Solutions' flyout menu, show/hide based on flyout menu state."
                    x-show="flyoutMenuOpen" class="
                        absolute
                        z-10
                        -ml-4
                        mt-3
                        transform
                        w-screen
                        max-w-md
                        lg:max-w-2xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2
                      ">
                    <div class="
                          rounded-lg
                          shadow-lg
                          ring-1 ring-black ring-opacity-5
                          overflow-hidden
                        ">
                      <div class="
                            relative
                            grid
                            gap-6
                            bg-white
                            px-5
                            py-6
                            sm:gap-8 sm:p-8
                            lg:grid-cols-2
                          ">
                        <a href="#" class="
                              -m-3
                              p-3
                              flex
                              items-start
                              rounded-lg
                              hover:bg-gray-50
                            ">
                          <div class="
                                flex-shrink-0 flex
                                items-center
                                justify-center
                                h-10
                                w-10
                                rounded-md
                                bg-gradient-to-r
                                from-sp-primary-100
                                to-sp-primary-200
                                text-white
                                sm:h-12 sm:w-12
                              ">
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                              aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                              </path>
                            </svg>
                          </div>
                          <div class="ml-4">
                            <p class="text-base font-medium text-gray-900">
                              Inbox
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              Get a better understanding of where your traffic
                              is coming from.
                            </p>
                          </div>
                        </a>

                        <a href="#" class="
                              -m-3
                              p-3
                              flex
                              items-start
                              rounded-lg
                              hover:bg-gray-50
                            ">
                          <div class="
                                flex-shrink-0 flex
                                items-center
                                justify-center
                                h-10
                                w-10
                                rounded-md
                                bg-gradient-to-r
                                from-sp-primary-100
                                to-sp-primary-200
                                text-white
                                sm:h-12 sm:w-12
                              ">
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                              aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                              </path>
                            </svg>
                          </div>
                          <div class="ml-4">
                            <p class="text-base font-medium text-gray-900">
                              Messaging
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              Speak directly to your customers in a more
                              meaningful way.
                            </p>
                          </div>
                        </a>

                        <a href="#" class="
                              -m-3
                              p-3
                              flex
                              items-start
                              rounded-lg
                              hover:bg-gray-50
                            ">
                          <div class="
                                flex-shrink-0 flex
                                items-center
                                justify-center
                                h-10
                                w-10
                                rounded-md
                                bg-gradient-to-r
                                from-sp-primary-100
                                to-sp-primary-200
                                text-white
                                sm:h-12 sm:w-12
                              ">
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                              aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                              </path>
                            </svg>
                          </div>
                          <div class="ml-4">
                            <p class="text-base font-medium text-gray-900">
                              Live Chat
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              Your customers' data will be safe and secure.
                            </p>
                          </div>
                        </a>

                        <a href="#" class="
                              -m-3
                              p-3
                              flex
                              items-start
                              rounded-lg
                              hover:bg-gray-50
                            ">
                          <div class="
                                flex-shrink-0 flex
                                items-center
                                justify-center
                                h-10
                                w-10
                                rounded-md
                                bg-gradient-to-r
                                from-sp-primary-100
                                to-sp-primary-200
                                text-white
                                sm:h-12 sm:w-12
                              ">
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/question-mark-circle"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                              aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                              </path>
                            </svg>
                          </div>
                          <div class="ml-4">
                            <p class="text-base font-medium text-gray-900">
                              Knowledge Base
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              Connect with third-party tools that you're
                              already using.
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </transition>
              </div>

              <a href="#" class="
                    text-base
                    font-medium
                    text-gray-500
                    hover:text-gray-900
                  ">
                Pricing
              </a>
              <a href="#" class="
                    text-base
                    font-medium
                    text-gray-500
                    hover:text-gray-900
                  ">
                Partners
              </a>
              <a href="#" class="
                    text-base
                    font-medium
                    text-gray-500
                    hover:text-gray-900
                  ">
                Company
              </a>
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
              <a href="#" class="
                    whitespace-nowrap
                    text-base
                    font-medium
                    text-gray-500
                    hover:text-gray-900
                  ">
                Sign in
              </a>
              <a href="#" class="
                    ml-8
                    whitespace-nowrap
                    inline-flex
                    items-center
                    justify-center
                    px-4
                    py-2
                    border border-transparent
                    rounded-md
                    shadow-sm
                    text-base
                    font-medium
                    text-white
                    bg-gradient-to-r
                    from-sp-primary-100
                    to-sp-primary-200
                    hover:from-sp-primary-300 hover:to-sp-primary-400
                  ">
                Sign up
              </a>
            </div>
          </div>

          <transition enter-active-class="duration-200 ease-out" enter-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
            leave-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" class="
                  absolute
                  z-30
                  top-0
                  inset-x-0
                  p-2
                  transition
                  transform
                  origin-top-right
                  md:hidden
                ">
              <div class="
                    rounded-lg
                    shadow-lg
                    ring-1 ring-black ring-opacity-5
                    bg-white
                    divide-y-2 divide-gray-50
                  ">
                <div class="pt-5 pb-6 px-5">
                  <div class="flex items-center justify-between">
                    <div>
                      <img class="h-14 w-auto"
                        src="{{ asset('/img/logo-sp.png') }}"
                        alt="Workflow" />
                    </div>
                    <div class="-mr-2">
                      <button @click="mobileMenuOpen = false" type="button" class="
                            bg-white
                            rounded-md
                            p-2
                            inline-flex
                            items-center
                            justify-center
                            text-gray-400
                            hover:text-gray-500 hover:bg-gray-100
                            focus:outline-none
                            focus:ring-2
                            focus:ring-inset
                            focus:ring-indigo-500
                          ">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg"
                          fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="mt-6">
                    <nav class="grid grid-cols-1 gap-7">
                      <a href="#" class="
                            -m-3
                            p-3
                            flex
                            items-center
                            rounded-lg
                            hover:bg-gray-50
                          ">
                        <div class="
                              flex-shrink-0 flex
                              items-center
                              justify-center
                              h-10
                              w-10
                              rounded-md
                              bg-gradient-to-r
                              from-sp-primary-100
                              to-sp-primary-200
                              text-white
                            ">
                          <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                            </path>
                          </svg>
                        </div>
                        <div class="ml-4 text-base font-medium text-gray-900">
                          Inbox
                        </div>
                      </a>

                      <a href="#" class="
                            -m-3
                            p-3
                            flex
                            items-center
                            rounded-lg
                            hover:bg-gray-50
                          ">
                        <div class="
                              flex-shrink-0 flex
                              items-center
                              justify-center
                              h-10
                              w-10
                              rounded-md
                              bg-gradient-to-r
                              from-sp-primary-100
                              to-sp-primary-200
                              text-white
                            ">
                          <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                          </svg>
                        </div>
                        <div class="ml-4 text-base font-medium text-gray-900">
                          Messaging
                        </div>
                      </a>

                      <a href="#" class="
                            -m-3
                            p-3
                            flex
                            items-center
                            rounded-lg
                            hover:bg-gray-50
                          ">
                        <div class="
                              flex-shrink-0 flex
                              items-center
                              justify-center
                              h-10
                              w-10
                              rounded-md
                              bg-gradient-to-r
                              from-sp-primary-100
                              to-sp-primary-200
                              text-white
                            ">
                          <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                            </path>
                          </svg>
                        </div>
                        <div class="ml-4 text-base font-medium text-gray-900">
                          Live Chat
                        </div>
                      </a>

                      <a href="#" class="
                            -m-3
                            p-3
                            flex
                            items-center
                            rounded-lg
                            hover:bg-gray-50
                          ">
                        <div class="
                              flex-shrink-0 flex
                              items-center
                              justify-center
                              h-10
                              w-10
                              rounded-md
                              bg-gradient-to-r
                              from-sp-primary-100
                              to-sp-primary-200
                              text-white
                            ">
                          <svg class="h-6 w-6" x-description="Heroicon name: outline/question-mark-circle"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                          </svg>
                        </div>
                        <div class="ml-4 text-base font-medium text-gray-900">
                          Knowledge Base
                        </div>
                      </a>
                    </nav>
                  </div>
                </div>
                <div class="py-6 px-5">
                  <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="
                          text-base
                          font-medium
                          text-gray-900
                          hover:text-gray-700
                        ">
                      Pricing
                    </a>

                    <a href="#" class="
                          text-base
                          font-medium
                          text-gray-900
                          hover:text-gray-700
                        ">
                      Partners
                    </a>

                    <a href="#" class="
                          text-base
                          font-medium
                          text-gray-900
                          hover:text-gray-700
                        ">
                      Company
                    </a>
                  </div>
                  <div class="mt-6">
                    <a href="#" class="
                          w-full
                          flex
                          items-center
                          justify-center
                          px-4
                          py-2
                          border border-transparent
                          rounded-md
                          shadow-sm
                          text-base
                          font-medium
                          text-white
                          bg-gradient-to-r
                          from-sp-primary-100
                          to-sp-primary-200
                          hover:from-sp-primary-300 hover:to-sp-primary-400
                        ">
                      Sign up
                    </a>
                    <p class="
                          mt-6
                          text-center text-base
                          font-medium
                          text-gray-500
                        ">
                      Existing customer?
                      <a href="#" class="text-gray-900"> Sign in </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </transition>
        </div>
      </header>

      <main>
        <!-- Hero section -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white overflow-hidden">
          <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
              <div class="sm:max-w-lg">
                <h1 class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-6xl">
                  Temukan Bumbu Masakan Rahasia Terbaikmu
                </h1>
                <p class="mt-4 text-xl text-gray-500">Dari bumbu kuliner hingga rempah-rempah dan rempah-rempah, 
                  Spiceso memiliki bahan-bahan organik tanpa pengawet untuk meningkatkan cita rasa masakan Anda.</p>
              </div>
              <div>
                <div class="mt-10">
                  <!-- Decorative image grid -->
                  <div aria-hidden="true"
                    class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
                    <div
                      class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                      <div class="flex items-center space-x-6 lg:space-x-8">
                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                          <div class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                            <img src="{{ asset('/img/sp/1.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="{{ asset('/img/sp/2.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                        </div>
                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="{{ asset('/img/sp/3.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="{{ asset('/img/sp/4.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="{{ asset('/img/sp/5.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                        </div>
                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="{{ asset('/img/sp/6.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="{{ asset('/img/sp/7.jpg') }}"
                              alt="" class="w-full h-full object-center object-cover">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <a href="#"
                    class="inline-block text-center bg-sp-primary-100 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-sp-primary-300">Belanja Sekarang
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
              <h2 class="text-3xl font-extrabold text-gray-900">Temukan Produk dari Kategori</h2>
        
              <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                <div class="group relative">
                  <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="{{ asset('/img/sp/category-1.png') }}" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                  </div>
                  <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Ketahanan < 1 Minggu
                    </a>
                  </h3>
                  <p class="text-base font-semibold text-gray-900">Rempah-Rempah</p>
                </div>
        
                <div class="group relative">
                  <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="{{ asset('/img/sp/category-2.png') }}" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
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
                  <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="{{ asset('/img/sp/category-3.png') }}" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
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
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Produk Terlaris</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              <div class="group relative">
                <div
                  class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                  <img src="{{ asset('/img/sp/category-3.png') }}"
                    alt="Front of men&#039;s Basic Tee in black."
                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="mt-4 flex justify-between">
                  <div>
                    <h3 class="text-sm text-gray-700">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Rempah-Rempah
                      </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Spicy Chilly</p>
                  </div>
                  <p class="text-sm font-medium text-gray-900">Rp 25.000</p>
                </div>
                <a
                href="#"
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
                "
              >
                Beli
              </a>
              </div>

              <!-- More products... -->
            </div>
          </div>
        </div>

        <!-- Feature Product Sections -->
        <div class="bg-gray-100">
          <div
            class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
            <div>
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications</h2>
              <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of
                Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to
                archive important task lists.</p>

              <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Origin</dt>
                  <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Material</dt>
                  <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder coated
                    steel card cover</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Dimensions</dt>
                  <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Finish</dt>
                  <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Includes</dt>
                  <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Considerations</dt>
                  <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each
                    item.</dd>
                </div>
              </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
              <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
                alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                class="bg-gray-100 rounded-lg">
              <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
                alt="Top down view of walnut card tray with embedded magnets and card groove."
                class="bg-gray-100 rounded-lg">
              <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg"
                alt="Side of walnut card tray with card groove and recessed card area." class="bg-gray-100 rounded-lg">
              <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg"
                alt="Walnut card tray filled with cards and card angled in dedicated groove."
                class="bg-gray-100 rounded-lg">
            </div>
          </div>
        </div>

        <!-- Alternating Feature Sections -->
        <div class="relative pt-16 pb-32 lg:overflow-hidden">
          <div aria-hidden="true" class="
                absolute
                inset-x-0
                top-0
                h-48
                bg-gradient-to-b
                from-gray-100
              "></div>
          <div class="relative">
            <div class="
                  lg:mx-auto
                  lg:max-w-7xl
                  lg:px-8
                  lg:grid
                  lg:grid-cols-2
                  lg:grid-flow-col-dense
                  lg:gap-24
                ">
              <div class="
                    px-4
                    max-w-xl
                    mx-auto
                    sm:px-6
                    lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2
                  ">
                <div>
                  <div>
                    <span class="
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
                    <h2 class="
                          text-3xl
                          font-extrabold
                          tracking-tight
                          text-gray-900
                        ">
                      Better understand your customers
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                      Semper curabitur ullamcorper posuere nunc sed. Ornare
                      iaculis bibendum malesuada faucibus lacinia porttitor.
                      Pulvinar laoreet sagittis viverra duis. In venenatis sem
                      arcu pretium pharetra at. Lectus viverra dui tellus
                      ornare pharetra.
                    </p>
                    <div class="mt-6">
                      <a href="#" class="
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
                        Get started
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="
                      pr-4
                      -ml-48
                      sm:pr-6
                      md:-ml-16
                      lg:px-0 lg:m-0 lg:relative lg:h-full
                    ">
                  <img class="
                        w-full
                        rounded-xl
                        shadow-xl
                        ring-1 ring-black ring-opacity-5
                        lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none
                      " src="{{ asset('/img/bg-banner.png') }}"
                    alt="Customer profile user interface" />
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
            "
          ></div>
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
                "
              >
                Full-featured
              </h2>
              <p class="mt-2 text-2xl font-extrabold text-gray-900 sm:text-3xl">
                Everything you need to talk with your customers
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
                    "
                  >
                    <svg
                      class="h-6 w-6 text-white"
                      x-description="Heroicon name: outline/view-list"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 10h16M4 14h16M4 18h16"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                      List view
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                      Nunc a, lacinia sed risus neque, arcu, rhoncus. Id mauris
                      justo facilisis aliquam platea vestibulum condimentum
                      morbi.
                    </dd>
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
                    "
                  >
                    <svg
                      class="h-6 w-6 text-white"
                      x-description="Heroicon name: outline/view-boards"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                      Boards
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                      Purus lobortis volutpat posuere id integer nunc tellus.
                      Non mauris malesuada feugiat massa mi pellentesque cum
                      est. Pharetra a varius urna rhoncus, tempor rutrum.
                    </dd>
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
                    "
                  >
                    <svg
                      class="h-6 w-6 text-white"
                      x-description="Heroicon name: outline/calendar"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                      Calendar
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                      Purus lobortis volutpat posuere id integer nunc tellus.
                      Non mauris malesuada feugiat massa mi pellentesque cum
                      est. Pharetra a varius urna rhoncus, tempor rutrum.
                    </dd>
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
                    "
                  >
                    <svg
                      class="h-6 w-6 text-white"
                      x-description="Heroicon name: outline/users"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                      Teams
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                      Tincidunt sollicitudin interdum nunc sit risus at bibendum
                      vitae. Urna, quam ut sit justo non, consectetur et varius.
                    </dd>
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
            "
          >
            <div class="max-w-lg mx-auto w-full space-y-8 lg:mx-0">
              <div>
                <h2 class="sr-only">Price</h2>
                <p class="relative grid grid-cols-2">
                  <span class="flex flex-col text-center">
                    <span
                      class="text-5xl font-extrabold text-white tracking-tight"
                      >$99</span
                    >
                    <span class="mt-2 text-base font-medium text-sp-primary-50"
                      >Setup fee</span
                    >
                    <span class="sr-only">plus</span>
                  </span>
                  <span
                    class="
                      pointer-events-none
                      absolute
                      h-12
                      w-full
                      flex
                      items-center
                      justify-center
                    "
                    aria-hidden="true"
                  >
                    <svg
                      class="h-6 w-6 text-sp-primary-200"
                      x-description="Heroicon name: outline/plus"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                      ></path>
                    </svg>
                  </span>
                  <span>
                    <span class="flex flex-col text-center">
                      <span
                        class="
                          text-5xl
                          font-extrabold
                          text-white
                          tracking-tight
                        "
                        >$4</span
                      >
                      <span class="mt-2 text-base font-medium text-sp-primary-50"
                        >Per month</span
                      >
                    </span>
                  </span>
                </p>
              </div>
              <ul
                class="
                  bg-sp-primary-400 bg-opacity-50
                  rounded
                  sm:grid sm:grid-cols-2 sm:grid-rows-3 sm:grid-flow-col
                "
              >
                <li class="py-4 px-4 flex items-center text-base text-white">
                  <svg
                    class="h-6 w-6 text-sp-primary-200"
                    x-description="Heroicon name: outline/check"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                  <span class="ml-3">Unlimited Projects</span>
                </li>
                <li
                  class="
                    border-t border-cyan-300 border-opacity-25
                    py-4
                    px-4
                    flex
                    items-center
                    text-base text-white
                  "
                >
                  <svg
                    class="h-6 w-6 text-sp-primary-200"
                    x-description="Heroicon name: outline/check"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                  <span class="ml-3">Unlimited storage</span>
                </li>
                <li
                  class="
                    border-t border-cyan-300 border-opacity-25
                    py-4
                    px-4
                    flex
                    items-center
                    text-base text-white
                  "
                >
                  <svg
                    class="h-6 w-6 text-sp-primary-200"
                    x-description="Heroicon name: outline/check"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                  <span class="ml-3">Cancel anytime</span>
                </li>
                <li
                  class="
                    border-t border-cyan-300 border-opacity-25
                    py-4
                    px-4
                    flex
                    items-center
                    text-base text-white
                    sm:border-t-0 sm:border-l
                  "
                >
                  <svg
                    class="h-6 w-6 text-sp-primary-200"
                    x-description="Heroicon name: outline/check"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                  <span class="ml-3">No per user fees</span>
                </li>
                <li
                  class="
                    border-t border-cyan-300 border-opacity-25
                    py-4
                    px-4
                    flex
                    items-center
                    text-base text-white
                    sm:border-l
                  "
                >
                  <svg
                    class="h-6 w-6 text-sp-primary-200"
                    x-description="Heroicon name: outline/check"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                  <span class="ml-3">24/7 support</span>
                </li>
                <li
                  class="
                    border-t border-cyan-300 border-opacity-25
                    py-4
                    px-4
                    flex
                    items-center
                    text-base text-white
                    sm:border-l
                  "
                >
                  <svg
                    class="h-6 w-6 text-sp-primary-200"
                    x-description="Heroicon name: outline/check"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                  <span class="ml-3">Cancel anytime</span>
                </li>
              </ul>
              <a
                href="#"
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
                "
              >
                Get started today
              </a>
              <a
                href="#"
                class="
                  block
                  text-center text-base
                  font-medium
                  text-sp-primary-50
                  hover:text-white
                "
              >
                Try Workflow Lite for free
              </a>
            </div>
          </div>
        </div>
      </div>

        <!-- CTA Section -->
        <div class="bg-white">
          <div class="
                max-w-4xl
                mx-auto
                py-16
                px-4
                sm:px-6 sm:py-24
                lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-between
              ">
            <h2 class="
                  text-4xl
                  font-extrabold
                  tracking-tight
                  text-gray-900
                  sm:text-4xl
                ">
              <span class="block">Ready to get started?</span>
              <span class="
                    block
                    bg-gradient-to-r
                    from-sp-primary-100
                    to-sp-primary-200
                    bg-clip-text
                    text-transparent
                  ">Get in touch or create an account.</span>
            </h2>
            <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
              <a href="#" class="
                    flex
                    items-center
                    justify-center
                    px-4
                    py-3
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
                Learn more
              </a>
              <a href="#" class="
                    flex
                    items-center
                    justify-center
                    px-4
                    py-3
                    border border-transparent
                    text-base
                    font-medium
                    rounded-md
                    shadow-sm
                    text-sp-primary-400 
                    bg-sp-primary-50
                    hover:bg-sp-primary-70
                  ">
                Get started
              </a>
            </div>
          </div>
        </div>
      </main>

      <footer class="bg-gray-50" aria-labelledby="footerHeading">
        <h2 id="footerHeading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
          <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
              <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                  <h3 class="
                        text-sm
                        font-semibold
                        text-gray-400
                        tracking-wider
                        uppercase
                      ">
                    Solutions
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Marketing
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Analytics
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Commerce
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Insights
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3 class="
                        text-sm
                        font-semibold
                        text-gray-400
                        tracking-wider
                        uppercase
                      ">
                    Support
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Pricing
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Documentation
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Guides
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        API Status
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                  <h3 class="
                        text-sm
                        font-semibold
                        text-gray-400
                        tracking-wider
                        uppercase
                      ">
                    Company
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        About
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Blog
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Jobs
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Press
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Partners
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3 class="
                        text-sm
                        font-semibold
                        text-gray-400
                        tracking-wider
                        uppercase
                      ">
                    Legal
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Claim
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Privacy
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Terms
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="mt-12 xl:mt-0">
              <h3 class="
                    text-sm
                    font-semibold
                    text-gray-400
                    tracking-wider
                    uppercase
                  ">
                Subscribe to our newsletter
              </h3>
              <p class="mt-4 text-base text-gray-500">
                The latest news, articles, and resources, sent to your inbox
                weekly.
              </p>
              <form class="mt-4 sm:flex sm:max-w-md">
                <label for="emailAddress" class="sr-only">Email address</label>
                <input type="email" name="emailAddress" id="emailAddress" autocomplete="email" required="" class="
                      appearance-none
                      min-w-0
                      w-full
                      bg-white
                      border border-gray-300
                      rounded-md
                      shadow-sm
                      py-2
                      px-4
                      text-base text-gray-900
                      placeholder-gray-500
                      focus:outline-none
                      focus:ring-indigo-500
                      focus:border-indigo-500
                      focus:placeholder-gray-400
                    " placeholder="Enter your email" />
                <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                  <button type="submit" class="
                        w-full
                        flex
                        items-center
                        justify-center
                        px-4
                        py-3
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
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="
                mt-12
                border-t border-gray-200
                pt-8
                md:flex md:items-center md:justify-between
                lg:mt-16
              ">
            <div class="flex space-x-6 md:order-2">
              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>

              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>

              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                  </path>
                </svg>
              </a>

              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>

              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
            <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
              © 2020 Workflow, Inc. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>