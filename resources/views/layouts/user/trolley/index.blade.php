<x-user-in-layout>
  <div class="container py-12 px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Keranjang Saya
    </h2>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Produk</th>
              <th class="px-4 py-3">Jumlah</th>
              <th class="px-4 py-3">Harga Satuan</th>
              <th class="px-4 py-3">Total</th>
              <th class="px-1 py-3"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @if($trolley)
              @foreach ($trolley->products as $product)
                <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                      <div class="relative hidden w-24 h-24 mr-3 rounded md:block">
                        @if (count($product->images) > 0)
                          <img class="object-cover w-full h-full rounded" src="{{ asset($product->images[0]->link) }}"
                            alt="" loading="lazy" />
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
                          {{ $product->deskripsi }}
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-sm">
                    <div class="custom-number-input h-8 w-32">
                      <div class="flex flex-row h-8 w-full rounded relative bg-transparent mt-1">
                        <button data-action="decrement"
                          class=" bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                          <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number"
                          class="border-gray-100 focus:outline-none text-center w-full bg-white font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                          name="custom-input-number" value="{{ $product->pivot->jumlah }}">
                        <button data-action="increment"
                          class="bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                          <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                      </div>
                  </td>
                  <td class="px-4 py-3 text-sm">
                    Rp. {{ $product->harga }}
                  </td>
                  <td class="px-4 py-3 text-sm">
                    Rp. {{ $product->harga * $product->pivot->jumlah }}
                  </td>
                  <td class="px-4 py-3 text-sm text-red-400">
                    <button
                      class="bg-red-200 text-red-600 hover:text-white hover:bg-red-600 h-8 w-16 rounded cursor-pointer"
                      id="delete-product" data-id="{{ $product->product_id }}">
                      <a href="#">
                        <i class="fa fa-trash"></i>
                      </a>
                    </button>
                  </td>
                </tr>

                <div class="fixed inset-0 hidden z-30 items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
                  id="modal-delete-product-{{ $product->product_id }}">
                  <div
                    class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                    role="dialog" id="modal">

                    <header class="flex justify-end">
                      <button
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                        aria-label="close" id="modal-close-button" data-id="{{ $product->product_id }}">
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
                        Apakah Anda ingin menghapus produk {{ $product->nama }} dari keranjang?
                      </p>
                    </div>

                    <footer class="flex flex-col items-center justify-end gap-2 sm:flex-row bg-gray-50 dark:bg-gray-800">
                      <button id="modal-close-button" data-id="{{ $product->product_id }}"
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                        Batal
                      </button>

                      <form method="POST"
                        action={{ route('user.trolley.delete', ['id' => $product->product_id, 'from' => $trolley->trolley_id]) }}>
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
            @endif
          </tbody>
        </table>
      </div>

      {{-- {{ $orders->links('components.admin.pagination.pagination') }} --}}
    </div>

    <div class="bg-white my-6 p-6 mb-8 rounded-lg shadow-md focus:outline-none focus:shadow-outline-sp-primary">
      @if (count($trolley->products) > 0)
        <div class="flex flex-row justify-end">
          <form action="{{ route('user.order.store') }}" method="POST" class="form-control h-12 w-full">
            @csrf
            
            <input class="hidden" type="number" value="{{ $trolley->trolley_id }}" name="trolley_id">

            <input class="hidden" type="number" value="{{ Auth::user()->user->user_id }}" name="user_id">
            
            @php
              $total_harga = 0.0;
            @endphp
            @foreach ($trolley->products as $product)
              <input class="hidden" name="idproduks[]" type="number" value="{{ $product->product_id }}">
              <input class="hidden" name="jumlahproduks[]" type="number" value="{{ $product->pivot->jumlah }}">

              @php
                $total_harga += ($product->pivot->jumlah * $product->harga);
              @endphp
            @endforeach

            <input class="hidden" type="number" step="0.01" value="{{ $total_harga }}" name="total_harga">

            @php
              $date = date('Y-m-d H:i:s');
            @endphp
            <input class="hidden" type="text" value="{{ $date }}" name="tgl_dipesan">

            <input class="hidden" type="text" value="belum-bayar" name="status">

            <button
              class="bg-sp-primary-200 text-white hover:text-white hover:bg-sp-primary-400 h-12 w-full rounded cursor-pointer"
              type="submit">
              Beli Sekarang
            </button>
          </form>
        </div>
      @else
        <div class="flex flex-row justify-end">
          <button
            class="bg-sp-primary-200 text-white hover:text-white hover:bg-sp-primary-400 h-12 w-full rounded cursor-pointer">
            <a href="{{ route('products') }}">
              Belanja Sekarang
            </a>
          </button>
        </div>
      @endif
    </div>
  </div>
</x-user-in-layout>

<style>
  input[type='number']::-webkit-inner-spin-button,
  input[type='number']::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    outline: none !important;
  }

  .custom-number-input input:focus {
    outline: none !important;
  }

</style>

<script type="text/javascript">
  function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value--;
    target.value = value;
  }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $("body").on('click', "#delete-product", function(e) {
      var productId = $(this).data(("id"));
      $(`#modal-delete-product-${productId}`).removeClass('hidden').addClass('flex');
    });

    $("body").on('click', "#modal-close-button", function(e) {
      var productId = $(this).data(("id"));
      $(`#modal-delete-product-${productId}`).removeClass('flex').addClass('hidden');
    });

    $("body").on('click', "#add-product", function(e) {
      $(`#modal-add-product`).removeClass('hidden').addClass('flex');
    });

    $("body").on('click', "#add-product-close", function(e) {
      $(`#modal-add-product`).removeClass('flex').addClass('hidden');
    });
  });
</script>
