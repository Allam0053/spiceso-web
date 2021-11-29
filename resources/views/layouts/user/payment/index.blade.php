<x-user-in-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Pembayaran Produk</h1>
    </div>
  
    <section aria-labelledby="products-heading" class="pt-6 pb-24">
      <h2 id="products-heading" class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
        <!-- Product grid -->
        <div class="bg-white py-2 px-5 rounded lg:col-span-3">
          <table class="w-full whitespace-no-wrap">
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              {{-- @foreach ($orders as $order) --}}
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-32 h-32 mr-3 rounded md:block">
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
                        <h2 class="text-2xl text-sp-primary-100 font-semibold">Rp 150.000</h2>
                      </div>
                    </div>
                  </div>
                </td>
                <td></td>
                <td class="px-1 py-3 text-lg">
                  Total Rp XXX.XXX
                </td>
              </tr>
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
                        <select
                          class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                          <option>JNE Express (1-2 Hari) - Rp 18.000</option>
                          <option>JNE Regular (2-3 Hari) - Rp 18.000</option>
                          <option>Si Cepat (1-2 Hari) - Rp 18.000</option>
                          <option>J&T Express (3-4 Hari) - Rp 18.000</option>
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
                        <select
                          class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                          <option>Transfer Bank</option>
                          <option>Nomor VA</option>
                          <option>Indomaret / Alfamart</option>
                          <option>QRIS (DANA, OVO, GoPay, ShopeePay)</option>
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
                      <input type="checkbox" class="text-sp-primary-100 rounded border-gray-200 form-checkbox" checked />
                      <div class="flex flex-wrap w-8" >
                        <span class="ml-2 font-medium mb-3">Proteksi Kerusakan</span>
                        <p class="ml-2 text-xs">Ganti rugi hingga 70% jika barang rusak <br/> 
                          saat sampai di rumah Anda atau tidak sesuai  <br/>  dengan tanggal expired</p>    
                      </div>
                    </label>
                  </div>
                </td>
                <td></td>
                <td></td>
              </tr>
              {{-- @endforeach --}}
            </tbody>
          </table>
        </div>

        <!-- Filters -->
        <form class="bg-white py-5 px-5 rounded block">
          <div class="border-b border-gray-200 mb-3 pb-3 grid grid-rows-3">
            <div class="font-medium">Harga Order</div>
            <div>Rp 000.000</div>
            <div class="font-medium">Biaya Pengiriman</div>
            <div>Rp 000.000</div>
            <div class="font-medium">Subtotal Diskon</div>
            <div>Rp 000.000</div>
          </div>
          <h3 class="my font-bold text-md">Total Tagihan</h3>
          <div class="mt-1">
            <h2 class="text-2xl text-sp-primary-100 font-semibold">Rp 175.000</h2>
          </div>
          <button type="submit" class="mt-10 w-full bg-sp-primary-200 focus:bg-sp-primary-400 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Bayar</button>
        </form>
      </div>
    </section>
  </div>
  </x-user-in-layout>