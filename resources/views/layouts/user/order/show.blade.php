<x-user-in-layout>
  <div class="container px-6 mt-12 mx-auto grid">
    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 my-4">
      Detail Pesanan
    </h2>
    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($order->products as $product)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <div class="relative hidden w-24 h-24 mr-3 rounded md:block">
                    <img class="object-cover w-full h-full rounded"
                      src="{{ asset($product->images[0]->link) }}"
                      alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">{{ $product->nama }}</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400 overflow-ellipsis">
                      {{ $product->pivot->jumlah }}
                    </p>
                    <div class="mt-3">
                      @if ($order->status == 'belum-bayar')
                        @include('components.user.icons.tag-unpaid')
                      @elseif ($order->status == "selesai")
                        @include('components.user.icons.tag-done')
                      @elseif ($order->status == "dibatalkan")
                        @include('components.user.icons.tag-canceled')
                      @elseif ($order->status == "sedang-dikirim")
                        @include('components.user.icons.tag-send')
                      @elseif ($order->status == "sedang-dikemas")
                        @include('components.user.icons.tag-pack')
                      @else
                        @include('components.user.icons.tag-wait')
                      @endif
                    </div>
                  </div>
                </div>
              </td>
              <td></td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="bg-white px-4 py-4">
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
              Total Harga
            </span>
    
            <p class="dark:text-gray-400 text-lg">
              {{ $order->total_harga ?? '' }}
            </p>
          </label>
    
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Tanggal Dipesan</span>
    
            <p class="dark:text-gray-400 text-base">
              {{ $order->tgl_dipesan ?? '' }}
            </p>
          </label>
    
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Tanggal Diterima</span>
    
            <p class="dark:text-gray-400 text-base">
              {{ $order->tgl_diterima ?? 'Belum di terima' }}
            </p>
          </label>
    
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
              Metode Pembayaran
            </span>
    
            <p class="dark:text-gray-400 text-lg">
              {{ $order->payment->nama ?? '' }}
            </p>
          </label>
    
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
              Metode Pengiriman
            </span>
    
            <p class="dark:text-gray-400 text-lg">
              {{ $order->deliver->nama ?? '' }}
            </p>
          </label>
        </div>
      </div>

      {{-- {{ $orders->links('components.admin.pagination.pagination') }} --}}
    </div>
    <div class="bg-white my-6 p-6 mb-8 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">
      <div class="flex flex-row justify-end">
        <button
          class="bg-gray-500 text-white font-medium hover:text-white hover:bg-gray-700 h-12 w-full rounded cursor-pointer">
          <a href="#">
            Detail Refund
          </a>
        </button>
      </div>
    </div>
  </div>
</x-user-in-layout>