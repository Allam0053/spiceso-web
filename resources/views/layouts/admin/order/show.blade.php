<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Detail Pesanan: {{ $order->user->nama }}
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      @foreach ($order->products as $product)
      <div class="flex items-center text-sm cursor-pointer mt-2">
        @if ($product->images != null && $product->images != '')
          <div class="relative hidden w-16 h-16 mr-3 rounded md:block text-center">
            <img class="object-cover w-full h-full rounded"
              src="{{ asset($product->images[0]->link) }}" alt="" loading="lazy" />
            <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
          </div>
        @else
          <div class="flex items-center justify-center w-16 h-16 mr-3">
            @include('components.admin.icons.shop-bag')
          </div>
        @endif
        <div>
          <p class="text-md font-semibold">{{ $product->nama }}</p>
          <p class="text-sm text-gray-600 dark:text-gray-400 overflow-ellipsis">
            {{ $product->pivot->jumlah }}
          </p>
        </div>
      </div>
      @endforeach
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
          Status
        </span>

        <p class="dark:text-gray-400 text-lg">
          @if ($order->status == "belum-bayar")
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
</x-admin-layout>
