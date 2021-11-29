<x-user-in-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Refund Produk</h1>
    </div>
  
    <section aria-labelledby="products-heading" class="pt-6 pb-24">
      <h2 id="products-heading" class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 lg:grid-cols-4"> 
        <!-- Filters -->
        <div class="bg-white px-6 py-12 rounded block">
          <div class="w-64 h-64 mr-3 rounded md:block">
            <img class="object-cover w-full h-full rounded"
              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
              alt="" />
          </div>
        </div>
        <!-- Product grid -->
        <form class="bg-white py-12 px-6 rounded lg:col-span-3">
          <h2 class="mt-1 mb-3 text-2xl font-bold">Nama Produk</h2>

          <label class="block mt-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400 font-bold">Alasan Refund</span>
              <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray"
                  rows="4" placeholder="Berikan ulasan Anda">
              </textarea>
          </label>

          <label for="foto" class="mt-3 block text-sm font-bold text-gray-700">
            Foto Produk (Bukti Alasan)
          </label>
          <div
              class="flex justify-center px-6 pt-5 pb-6 mt-2 border-2 border-gray-300 border-dashed rounded-md ">
              <div class="space-y-1 text-center" id="photo-input-field">
                  <svg class="w-12 h-12 mx-auto text-gray-400"
                      stroke="currentColor" fill="none" viewBox="0 0 48 48"
                      aria-hidden="true">
                      <path
                          d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                  </svg>
                  <div class="flex text-sm text-gray-600">
                      <label for="foto"
                          class="relative mx-auto font-medium text-sp-primary-100 bg-white rounded-md cursor-pointer hover:text-sp-primary-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sp-primary-400">
                          <span>Tambahkan Foto Bukti</span>
                          <input id="foto" name="foto" type="file" class="sr-only"
                              accept="image/*" onchange="previewFile()" />
                      </label>

                  </div>
                  <p class="text-xs text-gray-500">
                      Menerima tipe file PNG dan JPG dengan ukuran kurang dari
                      1MB.
                  </p>
              </div>
              <div class="relative" id="photo-thumbnail-container"
                  style="display: none">
                  <img class="object-scale-down w-full px-3 my-8"
                      id="photo-thumbnail" />
                  <span class="absolute top-0 bottom-0 right-0"
                      onclick="removeThumbnail()">
                      <svg class="w-6 h-6 text-gray-300 fill-current"
                          role="button" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20">
                          <title>Close</title>
                          <path
                              d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 
                                  1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                      </svg>
                  </span>
              </div>
          </div>

          <div class="border-t py-3 mt-6 border-gray-300">
            <h2 class="mt-1 mb-3 text-2xl font-bold">Informasi Bank</h2>
            <label class="block text-sm font-bold">
              <span class="text-gray-700 dark:text-gray-400">Jenis Bank</span>
              <select
                  class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                  <option>Transfer Bank</option>
                  <option>Nomor VA</option>
                  <option>Indomaret / Alfamart</option>
                  <option>QRIS (DANA, OVO, GoPay, ShopeePay)</option>
                </select>
          </label>
            <div class="flex flex-wrap -mx-3 mb-6 mt-2">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block text-sm font-bold">
                  <span class="text-gray-700 dark:text-gray-400">Nama Rekening</span>
                  <input
                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      placeholder="Nama Tercantum Rekening" />
                </label>
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block text-sm font-bold">
                  <span class="text-gray-700 dark:text-gray-400">No Rekening</span>
                  <input
                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      placeholder="XXXXXXXX" />
                </label>
              </div>
            </div>
          </div>

          <button type="submit" class="mt-5 w-full bg-sp-primary-200 focus:bg-sp-primary-400 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-sp-primary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sp-primary-100">Ajukan Refund</button>
        </form>


      </div>
    </section>
  </div>
  </x-user-in-layout>