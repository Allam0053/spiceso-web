<x-user-in-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Refund Produk</h1>
    </div>
  
    <section aria-labelledby="products-heading" class="pt-6 pb-24">
      <h2 id="products-heading" class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 lg:grid-cols-4"> 
        <!-- Filters -->
        <div class="bg-white px-6 py-12 rounded block">
          <label for="foto" class="mt-3 mb-3 block text-sm font-bold text-gray-700">
            Foto Produk (Bukti Alasan)
          </label>
          <div class="w-64 h-64 mr-3 rounded md:block">
            <img class="object-cover w-full h-full rounded"
              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
              alt="" />
          </div>
        </div>
        <!-- Product grid -->
        <div class="bg-white py-12 px-6 rounded lg:col-span-3">
          <h2 class="mt-1 mb-3 text-2xl font-bold">Nama Produk</h2>

          <label class="block mt-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400 font-bold">Alasan Refund</span>
            <p class="mt-1 font-normal">
                Saya tidak suka
            </p>
          </label>

          <div class="border-t py-3 mt-6 border-gray-300">
            <h2 class="mt-1 mb-3 text-2xl font-bold">Informasi Bank</h2>
            <label class="block text-sm font-bold">
              <span class="text-gray-700 dark:text-gray-400">Jenis Bank</span>
              <p class="mt-1 font-normal">
                  Saya tidak suka
              </p>
          </label>
            <div class="flex flex-wrap -mx-3 mb-6 mt-2">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block text-sm font-bold">
                  <span class="text-gray-700 dark:text-gray-400">Nama Rekening</span>
                  <p class="mt-1 font-normal">
                      Nama Rekening Saya
                  </p>
                </label>
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block text-sm font-bold">
                  <span class="text-gray-700 dark:text-gray-400">No Rekening</span>
                  <p class="mt-1 font-normal">
                      XXXXXXXX
                  </p>
                </label>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
  </div>
  </x-user-in-layout>