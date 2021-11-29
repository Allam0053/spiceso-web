<x-user-in-layout>
  <div class="container px-6 my-12 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Pesanan
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-sp-primary-400 bg-sp-primary-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-sp-primary"
      href="">
      <div class="flex items-center gap-2">
        @include('components.admin.icons.shop-bag')
        <span>{{}} Pesanan</span>
      </div>
      <span>Tambah Pesanan &sum;</span>
    </a>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Produk</th>
              <th class="px-1 py-3">Jumlah</th>
              <th class="px-4 py-3">Harga Satuan</th>
              <th class="px-4 py-3">Total</th>
              <th class="px-4 py-3"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            {{-- @foreach ($orders as $order) --}}
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <div class="relative hidden w-24 h-24 mr-3 rounded md:block">
                    <img class="object-cover w-full h-full rounded"
                      src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                      alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Nama Order</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400 overflow-ellipsis">
                      Deskripsi Order
                    </p>
                    <div class="mt-3">
                      @include('components.user.icons.tag-send')
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-1 py-3 text-sm">
                Jumlah
              </td>
              <td class="px-4 py-3 text-sm">
                Harga Order
              </td>
              <td class="px-4 py-3 text-sm">
                Total Order
              </td>
              <td class="px-4 py-3 text-sm">
                <button
                  class="bg-gray-100 text-gray-600 hover:text-white hover:bg-gray-600 h-8 w-16 rounded cursor-pointer">
                  <a href="#">
                    <i class="fa fa-chevron-right"></i>
                  </a>
                </button>
              </td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>

      {{-- {{ $orders->links('components.admin.pagination.pagination') }} --}}
    </div>
  </div>
</x-user-in-layout>