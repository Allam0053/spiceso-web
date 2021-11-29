<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Pesanan
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#">
      <div class="flex items-center gap-2">
        @include('components.admin.icons.shop-cart')
        <span>{{ $orders->total() }} Pesanan</span>
      </div>
    </a>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3 w-1/2">Pesanan Oleh</th>
              <th class="px-4 py-3 w-3/12">Total Harga</th>
              <th class="px-4 py-3 w-2/12">Jumlah Produk</th>
              <th class="px-4 py-3 w-2/12">Tanggal Pesan</th>
              <th class="px-4 py-3 w-1/12">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($orders as $order)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <a href="{{ route('admin.order.show', ['id' => $order->order_id]) }}">
                    <div class="flex items-center text-sm cursor-pointer">
                      @if ($order->user->foto_profil != null && $order->user->foto_profil != '')
                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block text-center">
                          <img class="object-cover w-full h-full rounded-full"
                            src="{{ asset($order->user->foto_profil) }}" alt="" loading="lazy" />
                          <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div>
                      @else
                        <div class="flex items-center justify-center w-8 h-8 mr-3">
                          @include('components.admin.icons.person')
                        </div>
                      @endif
                      <div>
                        <p class="font-semibold">{{ $order->user->nama }}</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400 overflow-ellipsis">
                          {{ $order->user->no_hp }}
                        </p>
                      </div>
                    </div>
                  </a>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $order->stok }}
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $order->harga }}
                </td>
                <td class="px-4 py-3 text-sm flex gap-3">
                  <button
                    class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="button">
                    <a href="{{ route('admin.order.edit', ['id' => $order->order_id]) }}">
                      @include('components.admin.icons.edit')
                    </a>
                  </button>
                  <button
                    class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                    id="delete-order" data-id="{{ $order->order_id }}">
                    @include('components.admin.icons.trash')
                  </button>
                </td>
              </tr>

              <div class="fixed inset-0 z-30 hidden items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
                id="modal-delete-order-{{ $order->order_id }}">
                <div
                  class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                  role="dialog" id="modal">

                  <header class="flex justify-end">
                    <button
                      class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                      aria-label="close" id="modal-close-button" data-id="{{ $order->order_id }}">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                      </svg>
                    </button>
                  </header>

                  <!-- Modal body -->
                  <div class="mt-4 mb-6">

                    <!-- Modal title -->
                    <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                      Hapus Produk
                    </p>

                    <!-- Modal description -->
                    <p class="text-sm text-gray-700 dark:text-gray-400">
                      Apakah Anda ingin menghapus produk {{ $order->nama }}?
                    </p>
                  </div>

                  <footer class="flex flex-col items-center justify-end gap-2 sm:flex-row bg-gray-50 dark:bg-gray-800">
                    <button id="modal-close-button" data-id="{{ $order->order_id }}"
                      class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                      Batal
                    </button>

                    <form method="POST" action={{ route('admin.order.delete', ['id' => $order->order_id]) }}>
                      @csrf
                      @method('DELETE')

                      <button
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red m-0">
                        Iya
                      </button>
                    </form>
                  </footer>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>

      {{ $orders->links('components.admin.pagination.pagination') }}
    </div>
  </div>

  <x-slot name="script">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("body").on('click', "#delete-order", function(e) {
          var orderId = $(this).data(("id"));
          $(`#modal-delete-order-${orderId}`).removeClass('hidden').addClass('flex');
        });

        $("body").on('click', "#modal-close-button", function(e) {
          var orderId = $(this).data(("id"));
          $(`#modal-delete-order-${orderId}`).removeClass('flex').addClass('hidden');
        });
      });
    </script>
  </x-slot>
</x-admin-layout>
