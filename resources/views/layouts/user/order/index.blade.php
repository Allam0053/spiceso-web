<x-user-in-layout>
  <div class="container px-6 my-12 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Pesanan
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-sp-primary-400 bg-sp-primary-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-sp-primary"
      href="">
      <div class="flex items-center gap-2">
        @include('components.user.icons.shop-bag')
        <span>{{ count($orders) }} Pesanan</span>
      </div>
    </a>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Pesanan</th>
              <th class="px-1 py-3">Jumlah Produk</th>
              <th class="px-4 py-3">Total Harga</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($orders as $order)
              @php
                $produks = '';
                $total_harga = 0;
                $is_has_image = false;
                $image_link = '';
                
                for ($i = 0; $i < count($order->products); $i++) {
                    if ($i != 0) {
                        $produks .= ', ';
                    }
                
                    $produks .= $order->products[$i]->nama;
                    $total_harga += $order->products[$i]->pivot->jumlah * $order->products[$i]->harga;
                
                    if (count($order->products[$i]->images) > 0) {
                        $image_link = $order->products[$i]->images[0]->link;
                
                        $is_has_image = true;
                    }
                }
              @endphp

              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-24 h-24 mr-3 rounded md:block">
                      @if ($is_has_image)
                        <img class="object-cover w-full h-full rounded" src="{{ asset($image_link) }}" alt=""
                          loading="lazy" />
                      @else
                        <img class="object-cover w-full h-full rounded"
                          src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                          alt="" loading="lazy" />
                      @endif
                      <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">Pesanan {{ $order->tgl_dipesan }}</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400 overflow-ellipsis">
                        {{ $produks }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-1 py-3 text-sm">
                  {{ count($order->products) }}
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $total_harga }}
                </td>
                <td class="px-4 py-3 text-sm">
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
                </td>
                <td class="px-4 py-3 text-sm">
                  @if ($order->status == 'belum-bayar')
                    <a href="{{ route('user.order.payment', ['id' => $order->order_id]) }}" class="font-medium">
                      <p>Lakukan Pembayaran &#8631;</p>
                    </a>
                  @else
                    <a href="{{ route('user.order.show', ['id' => $order->order_id]) }}" class="font-medium">
                      <p>Lihat Detail &rarr;</p>
                    </a>
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      {{ $orders->links('components.admin.pagination.pagination') }}
    </div>
  </div>
</x-user-in-layout>
