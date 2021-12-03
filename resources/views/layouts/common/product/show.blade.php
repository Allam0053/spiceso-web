<x-user-in-layout>
  <div class="bg-white pt-6">
    <!-- Image gallery -->
    <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
      @foreach ($product->images as $image)
        <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
          <img src="{{ asset($image->link) }}" alt="Two each of gray, white, and black shirts laying flat."
            class="w-full h-full object-center object-cover">
        </div>
      @endforeach
    </div>

    <!-- Product info -->
    <div
      class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
          {{ $product->nama }}
        </h1>
      </div>

      <!-- Options -->
      <div class="mt-4 lg:mt-0 lg:row-span-3">
        <h2 class="sr-only">Deskripsi Produk</h2>
        <p class="text-3xl text-gray-900">Rp. {{ $product->harga }}</p>
        <p class="mt-2 text-xl text-gray-700">Stok: {{ $product->stok }}</p>

        <!-- Reviews -->
        <div class="mt-6">
          <h3 class="sr-only">Reviews</h3>
          <div class="flex items-center">
            <div class="flex items-center">

              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
            </div>
            <p class="sr-only">4 out of 5 stars</p>
            <a href="#" class="ml-3 text-sm font-medium text-sp-primary-100 hover:text-sp-primary-400">117 ulasan</a>
          </div>
        </div>

        <div class="mt-10">
          <div>
            <div
              class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 border border-sp-primary-100 bg-white text-sp-primary-100 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-archive mr-2">
                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                <rect x="1" y="3" width="22" height="5"></rect>
                <line x1="10" y1="12" x2="14" y2="12"></line>
              </svg>
              {{ $product->durability->nama }}
            </div>
            <div
              class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 rounded-full bg-white text-gray-700 border">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-hard-drive mr-2">
                <line x1="22" y1="12" x2="2" y2="12"></line>
                <path
                  d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                </path>
                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                <line x1="10" y1="16" x2="10.01" y2="16"></line>
              </svg>
              {{ $product->category->nama }}
            </div>
          </div>

          <form action="{{ route('user.trolley.store') }}" method="POST">
            @csrf

            <fieldset>
              <div class="grid grid-cols-2 mt-4">
                <div class="group">
                  <input name="user_id" class="hidden" id="user_id" value="{{ Auth::user()->user->user_id ?? '' }}" type="number">

                  <input name="product_id" class="hidden" id="product_id" value="{{ $product->product_id }}" type="number">

                  <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                  <input type="number" name="jumlah" id="jumlah" autocomplete="address-level2" required
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-40 shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="1" max="{{ $product->stok }}">
                </div>
              </div>
            </fieldset>
            <button type="submit"
              class="mt-10 w-full bg-sp-contrast border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Tambah
              ke Keranjang</button>
          </form>

        </div>
        <button type="submit"
          class="mt-2 w-full bg-sp-primary-100 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Chat
          Penjual</button>
      </div>

      <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <!-- Description and details -->
        <div>
          <h3 class="sr-only">Deskripsi Produk</h3>

          <div class="space-y-6">
            <p class="text-base text-gray-900">
              {{ $product->deskripsi }}</p>
          </div>
        </div>

        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Komposisi</h2>

          <div class="mt-4 space-y-6">
            <p class="text-sm text-gray-600">{{ $product->komposisi }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-user-in-layout>
