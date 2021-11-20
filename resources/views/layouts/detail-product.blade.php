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
                <span class="sr-only">Spiceso</span>
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
                  <span>Produk</span>
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
                  <div x-description="'Produk' flyout menu, show/hide based on flyout menu state."
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
                              List Pemesanan
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              Daftar pesanan Anda yang sedang dibeli, diproses, dikirim, dan selesai.
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
                              Daftar Produk
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              Berbagai macam produk Spiceso terdapat di sini
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
                Keranjang
              </a>
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
              <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">
                <span class="sr-only">Lihat Notifikasi</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
  </svg>
              </button>
  
              <!-- Profile dropdown -->
              <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                <div>
                  <button @click="open = !open" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                    <span class="sr-only">Buka Menu User</span>
                    <img class="h-8 w-8 rounded-full" src="{{ asset('/img/user.png')}}" alt="">
                  </button>
                </div>
                <transition enter-active-class="transition ease-out duration-100" enter-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95"><div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                  
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profil Saya</a>
                                    
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Keluar</a>
                  
                </div></transition>
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
                        <span class="sr-only">Tutup menu</span>
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
                          List Pemesanan
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
                          Daftar Produk
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
                      Keranjang
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
                      Daftar
                    </a>
                    <p class="
                          mt-6
                          text-center text-base
                          font-medium
                          text-gray-500
                        ">
                      Sudah pernah daftar?
                      <a href="#" class="text-gray-900"> Masuk </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </transition>
        </div>
      </header>
      <main>
        <div class="bg-white">
          <div class="pt-6">
            <nav aria-label="Breadcrumb">
              <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                  <div class="flex items-center">
                    <a href="#" class="mr-2 text-sm font-medium text-gray-900">
                      Rempah-rempah dan Bumbu
                    </a>
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                      <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                    </svg>
                  </div>
                </li>
        
                <li class="text-sm">
                  <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
                    Simply Organic Harissa 
                  </a>
                </li>
              </ol>
            </nav>
        
            <!-- Image gallery -->
            <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
              <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                <img src="{{ asset('img/sp/h1.jpg') }}" alt="Two each of gray, white, and black shirts laying flat." class="w-full h-full object-center object-cover">
              </div>
              <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                  <img src="{{ asset('img/sp/h3.jpg') }}" alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                  <img src="{{ asset('img/sp/h2.jpg') }}" alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
                </div>
              </div>
              <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                <img src="{{ asset('img/sp/h0.jpg') }}" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
              </div>
            </div>
        
            <!-- Product info -->
            <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
              <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                  Simply Organic Harissa 
                </h1>
              </div>
        
              <!-- Options -->
              <div class="mt-4 lg:mt-0 lg:row-span-3">
                <h2 class="sr-only">Deskripsi Produk</h2>
                <p class="text-3xl text-gray-900">Rp 64.000</p>
        
                <!-- Reviews -->
                <div class="mt-6">
                  <h3 class="sr-only">Reviews</h3>
                  <div class="flex items-center">
                    <div class="flex items-center">
                      <!--
                        Heroicon name: solid/star
        
                        Active: "text-gray-900", Default: "text-gray-200"
                      -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
        
                      <!-- Heroicon name: solid/star -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
        
                      <!-- Heroicon name: solid/star -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
        
                      <!-- Heroicon name: solid/star -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
        
                      <!-- Heroicon name: solid/star -->
                      <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>
                    <p class="sr-only">4 out of 5 stars</p>
                    <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 ulasan</a>
                  </div>
                </div>
        
                <div class="mt-10">
                  <div>
                      <div
                        class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 border border-sp-primary-100 bg-white text-sp-primary-100 rounded-full"
                      >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-archive mr-2"
                      >
                        <polyline points="21 8 21 21 3 21 3 8"></polyline>
                        <rect x="1" y="3" width="22" height="5"></rect>
                        <line x1="10" y1="12" x2="14" y2="12"></line>
                      </svg>
                        1-2 Minggu
                      </div>
                      <div
                      class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 rounded-full bg-white text-gray-700 border"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-hard-drive mr-2"
                        >
                          <line x1="22" y1="12" x2="2" y2="12"></line>
                          <path
                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"
                          ></path>
                          <line x1="6" y1="16" x2="6.01" y2="16"></line>
                          <line x1="10" y1="16" x2="10.01" y2="16"></line>
                        </svg>
                        Rempah-rempah dan Bumbu
                      </div>
                  </div>

                  <form action="#" method="POST">
                    <fieldset>
                      <div class="grid grid-cols-2 mt-4">
                        <div class="group">
                          <label for="netto" class="block text-sm font-medium text-gray-700">Berat Bersih</label>
                          <select id="netto" name="netto" autocomplete="netto-name" class="mt-1 block w-40 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>25g</option>
                          </select>
                        </div>
                        <div class="group">
                          <label for="sum" class="block text-sm font-medium text-gray-700">Jumlah</label>
                          <input type="number" name="sum" id="sum" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-40 shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="1">
                        </div>
                      </div>
                    </fieldset>
                  </form>
        
                  <button type="submit" class="mt-10 w-full bg-sp-contrast border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Tambah ke Keranjang</button>
                </div>
                <button type="submit" class="mt-2 w-full bg-sp-primary-100 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Chat Penjual</button>
              </div>
        
              <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <!-- Description and details -->
                <div>
                  <h3 class="sr-only">Deskripsi Produk</h3>
        
                  <div class="space-y-6">
                    <p class="text-base text-gray-900">
                      Harissa adalah Saus atau pasta pedas Tunisia yang biasanya dibuat dari cabai, minyak zaitun, dan rempah-rempah. 
                      Kami mendapatkan rempah-rempah Anda tertutup di sini. Bumbu Harissa kami adalah campuran organik, 
                      aroma bawang putih dengan rasa yang kompleks, berasap, seperti kari dan sentuhan panas pedas. </p>
                  </div>
                </div>
        
                <div class="mt-10">
                  <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
        
                  <div class="mt-4">
                    <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                      <li class="text-gray-400"><span class="text-gray-600">Berwarna merah canti</span></li>
        
                      <li class="text-gray-400"><span class="text-gray-600">Sangat cocok untuk masakan pasta</span></li>
        
                      <li class="text-gray-400"><span class="text-gray-600">Sedap dan berasa kompleks</span></li>        
                    </ul>
                  </div>
                </div>
        
                <div class="mt-10">
                  <h2 class="text-sm font-medium text-gray-900">Komposisi</h2>
        
                  <div class="mt-4 space-y-6">
                    <p class="text-sm text-gray-600">Paprika Organik, Jintan Organik, Cabai Organik, Cabai Organik, Ketumbar Organik, Jintan Organik, Bawang Putih Organik, Peppermint Organik..</p>
                  </div>
                </div>
              </div>
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
                      QUICK MENU
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        List Produk
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        List Pemesanan
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Keranjang
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Akun Saya
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
                      Support
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        FAQs
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Kontak Kami
                      </a>
                    </li>

                    <li>
                      <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Tentang
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
                Ikuti Kami
              </h3>
              <p class="mt-4 text-base text-gray-500">
                Berita, artikel, dan penawaran terbaru dikirim ke kotak masu emailmu setiap minggu.                
              </p>
              <form class="mt-4 sm:flex sm:max-w-md">
                <label for="emailAddress" class="sr-only">Email</label>
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
                    " placeholder="Masukkan emailmu" />
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
            </div>
            <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
              © 2021 Spiceso, Inc. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>
