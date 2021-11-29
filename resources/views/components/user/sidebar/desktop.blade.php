<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <div class="flex justify-start lg:ml-2 lg:flex-1">
      <a href="#">
        <span class="sr-only">Spiceso</span>
        <img class="h-14 w-auto sm:h-16" src="{{ asset('/img/logo-sp.png') }}" alt="" />
      </a>
    </div>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="#">
        @include('components.user.icons.shop-bag')
        <span class="ml-4">Keranjang</span>
      </a>
    </li>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="#">
        @include('components.user.icons.shop-cart')
        <span class="ml-4">Pesanan</span>
      </a>
    </li>
    <li class="relative px-6 py-3">
      <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="#">
        @include('components.user.icons.tasks')
        <span class="ml-4">Profil Saya</span>
      </a>
    </li>
  </ul>
  </div>
</aside>
