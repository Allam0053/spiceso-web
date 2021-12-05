<x-user-in-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Pembayaran Pesanan</h1>
    </div>

    <section aria-labelledby="products-heading" class="pt-6 pb-24">
      <h2 id="products-heading" class="sr-only">Products</h2>

      <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
        <!-- Product grid -->
        <div class="bg-white py-2 px-5 rounded lg:col-span-3">
          <table class="w-full whitespace-no-wrap">
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <tr class="my-3">
                <td class="px-1 py-3 text-sm">
                  <div class="font-bold grid grid-cols-1">
                    <div>Metode Pengiriman</div>
                  </div>
                </td>
                <td>
                  <div class="grid grid-cols-1">
                    <div>
                      <label class="block text-sm">
                        <select name="deliver_method_id" id="deliver-selector"
                          class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                          <option>Pilih Metode Pengiriman</option>
                          @foreach ($delivers as $deliver)
                            <option value="{{ $deliver->deliver_method_id }}"
                              id="deliver-item-{{ $deliver->deliver_method_id }}"
                              data-price="{{ $deliver->harga }}">{{ $deliver->penyedia }}
                              {{ $deliver->nama }} ({{ $deliver->min }}-{{ $deliver->max }} Hari) - Rp.
                              {{ $deliver->harga }}</option>
                          @endforeach
                        </select>
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-3">
                <td class="px-1 py-3 text-sm">
                  <div class="font-bold grid grid-cols-1">
                    <div>Metode Pembayaran</div>
                  </div>
                </td>
                <td>
                  <div class="grid grid-cols-1">
                    <div>
                      <label class="block text-sm">
                        <select name="payment_method_id" id="payment-selector"
                          class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                          <option>Pilih Metode Pembayaran</option>
                          @foreach ($payments as $payment)
                            <option id="payment-item-{{ $payment->payment_method_id }}"
                              data-record="{{ $payment->rekening }}" data-bank="{{ $payment->bank }}"
                              data-name="{{ $payment->nama }}" value="{{ $payment->payment_method_id }}">
                              Transfer {{ $payment->bank }}</option>
                          @endforeach
                        </select>
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="px-2 py-3 text-sm">
                  <div class="grid grid-cols-1">
                    <div class="font-bold">Kategori Produk</div>
                    <div class="font-bold">Ketahanan</div>
                  </div>
                </td>
                <td class="px-2 py-3 text-sm">
                  <div>Rempah-rempah & Bumbu</div>
                  <div>1-2 Minggu</div>
                </td>
              </tr>
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-2 py-3 text-sm">
                  <div>
                    <label class="inline-flex items-center">
                      <input type="checkbox" class="text-sp-primary-100 rounded border-gray-200 form-checkbox"
                        checked />
                      <div class="flex flex-wrap w-8">
                        <span class="ml-2 font-medium mb-3">Proteksi Kerusakan</span>
                        <p class="ml-2 text-xs">Ganti rugi hingga 70% jika barang rusak <br />
                          saat sampai di rumah Anda atau tidak sesuai <br /> dengan tanggal expired</p>
                      </div>
                    </label>
                  </div>
                </td>
              </tr>

              @foreach ($order->products as $product)
                <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                      <div class="relative hidden w-32 h-32 mr-3 rounded md:block">
                        @if (count($product->images) > 0)
                          <img class="object-cover w-full h-full rounded"
                            src="{{ asset($product->images[0]->link) }}" alt="" loading="lazy" />
                        @else
                          <img class="object-cover w-full h-full rounded"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt="" loading="lazy" />
                        @endif
                        <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">{{ $product->nama }}</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400 overflow-ellipsis">
                          {{ $product->category->nama }}
                        </p>
                        <div class="mt-3">
                          <h2 class="text-2xl text-sp-primary-100 font-semibold">x {{ $product->pivot->jumlah }}</h2>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-1 py-3 text-lg text-right">
                    Total Rp {{ $product->pivot->jumlah * $product->harga }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- Filters -->
        <div class="bg-white py-5 px-5 rounded block">
          <div class="border-b border-gray-200 mb-3 pb-3 grid grid-rows-3">
            <div class="font-medium">Harga Order</div>
            <div id="order-price" data-price="{{ $order->total_harga }}">Rp {{ $order->total_harga }}</div>
            <div class="font-medium">Biaya Pengiriman</div>
            <div id="deliver-price">Rp 000.000</div>
            <div class="font-medium">Subtotal Diskon</div>
            <div>Rp 0.00</div>
          </div>
          <h3 class="my font-bold text-md">Total Tagihan</h3>
          <div class="mt-1">
            <h2 id="total-price" class="text-2xl text-sp-primary-100 font-semibold">Rp {{ $order->total_harga }}</h2>
          </div>
          <button type="button" id="modal-payment-btn"
            class="mt-10 w-full bg-sp-primary-200 focus:bg-sp-primary-400 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Bayar</button>
        </div>
      </div>
    </section>

    <div class="fixed inset-0 hidden z-30 items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      id="modal-payment">
      <div
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog" id="modal">

        <header class="flex justify-end">
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
            aria-label="close" id="modal-close-button">
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
            Lakukan Pembayaran
          </p>

          <!-- Modal description -->
          <p class="text-sm text-gray-700 dark:text-gray-400" id="modal-payment-description">
            Silahkan lakukan transfer pada rekening berikut?
          </p>
        </div>

        <footer class="flex flex-col items-center justify-right gap-2 sm:flex-row dark:bg-gray-800">
          <button id="modal-close-button"
            class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
            Batal
          </button>

          <form method="POST" action={{ route('user.order.payment.update', ['id' => $order->order_id]) }}>
            @csrf
            @method('PUT')
            
            <input name="status" value="menunggu-konfirmasi" class="form-control hidden">

            <button
              class="w-full px-5 py-3 text-sm font-medium leading-5 bg-sp-primary-200 focus:bg-sp-primary-400 border border-transparent rounded items-center justify-center text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">
              Selesaikan Pembayaran
            </button>
          </form>
        </footer>
      </div>
    </div>
  </div>
</x-user-in-layout>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $("body").on('change', "#deliver-selector", function(e) {
      var deliverId = $("select[id='deliver-selector']").val();
      var deliverPrice = parseFloat($(`#deliver-item-${deliverId}`).data("price"));
      var orderPrice = parseFloat($("#order-price").data("price"));

      $('#deliver-price').html(`Rp. ${deliverPrice}`);
      $('#total-price').html(`Rp. ${deliverPrice + orderPrice}`);
    });

    $("body").on('change', "#payment-selector", function(e) {
      var deliverId = $("select[id='deliver-selector']").val();
      var deliverPrice = parseFloat($(`#deliver-item-${deliverId}`).data("price"));
      var orderPrice = parseFloat($("#order-price").data("price"));
      var paymentId = $("select[id='payment-selector']").val();
      var paymentRec = $(`#payment-item-${paymentId}`).data("record");
      var paymentBank = $(`#payment-item-${paymentId}`).data("bank");
      var paymentName = $(`#payment-item-${paymentId}`).data("name");

      $('#modal-payment-description').html(
        `Silahkan melakukan pembayaran dengan transfer uang sejumlah Rp. ${deliverPrice + orderPrice} pada nomor rekening ${paymentBank}: ${paymentRec} atas nama ${paymentName}`
      );
    });

    $("body").on('click', "#modal-payment-btn", function(e) {
      $(`#modal-payment`).removeClass('hidden').addClass('flex');
    });

    $("body").on('click', "#modal-close-button", function(e) {
      $(`#modal-payment`).removeClass('flex').addClass('hidden');
    });
  });
</script>
