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
                      class="border-gray-100 outline-none focus:outline-none text-center w-full bg-white font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                      name="custom-input-number" value="0"></input>
                    <button data-action="increment"
                      class="bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                      <span class="m-auto text-2xl font-thin">+</span>
                    </button>
                  </div>
              </td>
              <td class="px-4 py-3 text-sm">
                Harga Order
              </td>
              <td class="px-4 py-3 text-sm">
                Total Order
              </td>
              <td class="px-4 py-3 text-sm text-red-400">
                <button
                  class="bg-red-200 text-red-600 hover:text-white hover:bg-red-600 h-8 w-16 rounded cursor-pointer">
                  <a href="#">
                    <i class="fa fa-trash"></i>
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

    <div class="my-6 p-6 mb-8 bg-white rounded-lg shadow-md focus:outline-none focus:shadow-outline-sp-primary">
      <div class="flex flex-row justify-end">
        <button
          class="bg-sp-primary-200 text-white hover:text-white hover:bg-sp-primary-400 h-12 w-full rounded cursor-pointer">
          <a href="#">
            Beli Sekarang
          </a>
        </button>
      </div>
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

<script>
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