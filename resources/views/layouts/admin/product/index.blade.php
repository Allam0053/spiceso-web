<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Produk
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="{{ route('admin.products.create') }}">
      <div class="flex items-center gap-2">
        @include('components.admin.icons.shop-bag')
        <span>{{ $products->total() }} Produk</span>
      </div>
      <span class="flex items-center gap-2">
        <p>Tambah Produk</p>
        @include('components.admin.icons.plus')
      </span>
    </a>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Produk</th>
              <th class="px-4 py-3">Jumlah Stok</th>
              <th class="px-4 py-3">Harga</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($products as $product)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                        alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">{{ $product->nama }}</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400 overflow-ellipsis">
                        {{ $product->deskripsi }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $product->stok }}
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $product->harga }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      {{ $products->links('components.admin.pagination.pagination') }}
    </div>
  </div>
</x-admin-layout>
