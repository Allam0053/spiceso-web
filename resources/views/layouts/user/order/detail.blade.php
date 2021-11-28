<x-user-in-layout>
  <div class="container px-6 mt-12 mx-auto grid">
    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Detail Pesanan
    </h2>
    <nav aria-label="Breadcrumb">
      <ol role="list" class="my-2 mb-6 flex lg:max-w-7xl">
        <li>
          <div class="flex items-center">
            <a href="#" class="mr-2 text-sm font-medium text-gray-900">
              Data Pesanan
            </a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>

        <li class="text-sm">
          <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
            Nama Pesanan
          </a>
        </li>
      </ol>
    </nav>
    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
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
              <td class="px-2 py-3 text-sm">
                <div class="grid grid-cols-1">
                  <div>Harga Order</div>
                  <div>Biaya Pengiriman</div>
                  <div>Subtotal Diskon</div>
                </div>
              </td>
              <td class="px-1 py-3 text-sm">
                Jumlah
              </td>
              <td class="px-2 py-3 text-sm">
                Total 
              </td>
            </tr>
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-2 py-3 text-sm">
              </td>
              <td class="px-1 py-3 text-sm">
                <div class="grid grid-cols-1">
                  <div>Metode Pengiriman</div>
                  <div>Kategori Produk</div>
                  <div>Ketahanan</div>
                </div>
              </td>
              <td>
                <div class="grid grid-cols-1">
                  <div>JNE</div>
                  <div>Rempah-rempah & Bumbu</div>
                  <div>1-2 Minggu</div>
                </div>
              </td>
              <td></td>
            </tr>
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-2 py-3 text-sm">
              </td>
              <td class="px-1 py-3 text-sm">
                <div class="grid grid-cols-1">
                  <div>Telah Diterima</div>
                </div>
              </td>
              <td>
                <div class="grid grid-cols-1">
                  <div>12/12/2021</div>
                </div>
              </td>
              <td></td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>

      {{-- {{ $orders->links('components.admin.pagination.pagination') }} --}}
    </div>
    <div class="bg-white my-6 p-6 mb-8 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">
      <div class="flex flex-row justify-end">
        <button
          class="bg-gray-300 text-gray-700 font-medium hover:text-white hover:bg-gray-700 h-12 w-full rounded cursor-pointer">
          <a href="#">
            Detail Refund
          </a>
        </button>
      </div>
    </div>
  </div>
</x-user-in-layout>