<x-user-in-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Produk</h1>

    <div class="flex items-center">
      <div class="relative inline-block text-left">
        <!--
                    Dropdown menu, show/hide based on menu state.

                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
      </div>
      <button type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
        <span class="sr-only">View grid</span>
        <!-- Heroicon name: solid/view-grid -->
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
          fill="currentColor">
          <path
            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
        </svg>
      </button>
    </div>
  </div>

  <section aria-labelledby="products-heading" class="pt-6 pb-24">
    <h2 id="products-heading" class="sr-only">Products</h2>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
      <!-- Filters -->
      <form class="bg-white py-2 px-5 rounded hidden lg:block">
        <h3 class="sr-only">Categories</h3>
        <div class="border-b border-gray-200 py-6">
          <h3 class="-my-3 flow-root">
            <!-- Expand/collapse section button -->
            <button type="button"
              class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
              aria-controls="filter-section-0" aria-expanded="false">
              <span class="font-medium text-gray-900">
                Kategori
              </span>
              <span class="ml-6 flex items-center">
              </span>
            </button>
          </h3>
          <!-- Filter section, show/hide based on section state. -->
          <div class="pt-6" id="filter-section-0">
            <div class="space-y-4">
              <div class="flex items-center">
                <input id="filter-color-0" name="color[]" value="white" type="checkbox"
                  class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="filter-color-0" class="ml-3 text-sm text-gray-600">
                  Bumbu Komplit
                </label>
              </div>

              <div class="flex items-center">
                <input id="filter-color-1" name="color[]" value="beige" type="checkbox"
                  class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="filter-color-1" class="ml-3 text-sm text-gray-600">
                  Penyedap
                </label>
              </div>

              <div class="flex items-center">
                <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked
                  class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="filter-color-2" class="ml-3 text-sm text-gray-600">
                  Rempah
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="border-b border-gray-200 py-6">
          <h3 class="-my-3 flow-root">
            <!-- Expand/collapse section button -->
            <button type="button"
              class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
              aria-controls="filter-section-1" aria-expanded="false">
              <span class="font-medium text-gray-900">
                Ketahanan
              </span>
            </button>
          </h3>
          <!-- Filter section, show/hide based on section state. -->
          <div class="pt-6" id="filter-section-1">
            <div class="space-y-4">
              <div class="flex items-center">
                <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox"
                  class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="filter-category-0" class="ml-3 text-sm text-gray-600">
                  < 1 Minggu </label>
              </div>

              <div class="flex items-center">
                <input id="filter-category-1" name="category[]" value="sale" type="checkbox"
                  class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="filter-category-1" class="ml-3 text-sm text-gray-600">
                  1-2 Minggu
                </label>
              </div>

              <div class="flex items-center">
                <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked
                  class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="filter-category-2" class="ml-3 text-sm text-gray-600">
                  > 2 Minggu
                </label>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- Product grid -->
      <div class="lg:col-span-3">
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
          <div class="shadow-md rounded group relative bg-white p-4">
            <div
              class="w-full min-h-60 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
              <img src="{{ asset('/img/sp/category-3.png') }}" alt="Front of men&#039;s Basic Tee in black."
                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Rempah-rempah & Bumbu
                  </a>
                </h3>
                <p class="mt-1 text-lg text-gray-500">Spicy Chilly</p>
              </div>
              <p class="text-xl font-bold text-right font-medium text-gray-900">Rp 25.000</p>
            </div>
            <a href="#" class="
                        mt-4
                        w-full
                        bg-transparent
                        border border-sp-primary-100
                        rounded-md
                        py-3
                        px-8
                        flex
                        items-center
                        justify-center
                        text-lg
                        leading-6
                        font-medium
                        text-sp-primary-100
                        hover:bg-sp-primary-50
                        md:px-10
                      ">
              Beli
            </a>
          </div>
          <div class="shadow-md rounded group relative bg-white p-4">
            <div
              class="w-full min-h-60 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
              <img src="{{ asset('/img/sp/category-3.png') }}" alt="Front of men&#039;s Basic Tee in black."
                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Rempah-rempah & Bumbu
                  </a>
                </h3>
                <p class="mt-1 text-lg text-gray-500">Spicy Chilly</p>
              </div>
              <p class="text-xl font-bold text-right font-medium text-gray-900">Rp 25.000</p>
            </div>
            <a href="#" class="
                        mt-4
                        w-full
                        bg-transparent
                        border border-sp-primary-100
                        rounded-md
                        py-3
                        px-8
                        flex
                        items-center
                        justify-center
                        text-lg
                        leading-6
                        font-medium
                        text-sp-primary-100
                        hover:bg-sp-primary-50
                        md:px-10
                      ">
              Beli
            </a>
          </div>
          <div class="shadow-md rounded group relative bg-white p-4">
            <div
              class="w-full min-h-60 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
              <img src="{{ asset('/img/sp/category-3.png') }}" alt="Front of men&#039;s Basic Tee in black."
                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Rempah-rempah & Bumbu
                  </a>
                </h3>
                <p class="mt-1 text-lg text-gray-500">Spicy Chilly</p>
              </div>
              <p class="text-xl font-bold text-right font-medium text-gray-900">Rp 25.000</p>
            </div>
            <a href="#" class="
                        mt-4
                        w-full
                        bg-transparent
                        border border-sp-primary-100
                        rounded-md
                        py-3
                        px-8
                        flex
                        items-center
                        justify-center
                        text-lg
                        leading-6
                        font-medium
                        text-sp-primary-100
                        hover:bg-sp-primary-50
                        md:px-10
                      ">
              Beli
            </a>
          </div>
        </div>
        <!-- /End replace -->
      </div>
    </div>
  </section>
</div>
</x-user-in-layout>