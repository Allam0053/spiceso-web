<x-user-in-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Produk</h1>
    </div>

    <section aria-labelledby="products-heading" class="pt-6 pb-14">
      <h2 id="products-heading" class="sr-only">Products</h2>

      <div class="flex flex-start w-full gap-x-8 gap-y-10 justify-items-stretch">
        <form class="bg-white py-2 px-5 rounded w-1/4 self-start flex flex-col items-stretch">
          <div class="border-b border-gray-200 py-6">
            <h3 class="-my-3 flow-root">
              <!-- Expand/collapse section button -->
              <button type="button"
                class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
                aria-controls="filter-section-0" aria-expanded="false">
                <span class="font-medium text-xl text-gray-900">
                  Kategori
                </span>
                <span class="ml-6 flex items-center">
                </span>
              </button>
            </h3>
            <!-- Filter section, show/hide based on section state. -->
            <div class="pt-6" id="filter-section-0">
              <div class="space-y-4">
                @foreach ($categories as $category)
                  <div class="flex items-center">
                    <input id="filter-category-{{ $category->product_category_id }}" name="category[]" value="white"
                      type="checkbox" class="h-4 w-4 border-gray-300 rounded text-sp-primary-100 focus:ring-indigo-500">
                    <label for="filter-category-{{ $category->product_category_id }}"
                      class="ml-3 text-sm text-gray-600">
                      {{ $category->nama }}
                    </label>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
  
          <div class="border-b border-gray-200 py-6">
            <h3 class="-my-3 flow-root">
              <!-- Expand/collapse section button -->
              <button type="button"
                class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
                aria-controls="filter-section-1" aria-expanded="false">
                <span class="font-medium text-xl text-gray-900">
                  Ketahanan
                </span>
              </button>
            </h3>
            <!-- Filter section, show/hide based on section state. -->
            <div class="pt-6" id="filter-section-1">
              <div class="space-y-4">
                @foreach ($durabilities as $durability)
                  <div class="flex items-center">
                    <input id="filter-durability-{{ $durability->product_durability_id }}" name="durability[]"
                      value="new-arrivals" type="checkbox"
                      class="h-4 w-4 border-gray-300 rounded text-sp-primary-100 focus:ring-indigo-500">
                    <label for="filter-durability-{{ $durability->product_durability_id }}"
                      class="ml-3 text-sm text-gray-600">
                      {{ $durability->nama }}
                    </label>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
  
          <button class="btn self-end mb-4">
            <a href="#"
              class="
                mt-2
                ml-8
                whitespace-nowrap
                inline-flex
                px-4
                py-1
                border border-transparent
                rounded-md
                shadow-sm
                text-base
                font-medium
                text-white
                bg-gradient-to-r
                from-sp-primary-100
                to-sp-primary-200
                hover:from-sp-primary-300 hover:to-sp-primary-400
                ">
              Filter
            </a>
          </button>
        </form>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-10">
          <!-- Product grid -->
          <div class="lg:col-span-3">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
              @foreach ($products as $product)
                <div class="shadow-md rounded group relative bg-white p-4 cursor-pointer">
                  <a href="{{ route('user.product.detail') }}">
                    <div
                      class="w-full min-h-60 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
                      @if (count($product->images) > 0)
                        <img src="{{ asset($product->images[0]->link) }}" alt="Front of men&#039;s Basic Tee in black."
                          class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                      @else
                        <img src="{{ asset('/img/sp/category-3.png') }}" alt="Front of men&#039;s Basic Tee in black."
                          class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                      @endif
                    </div>
                    <div class="mt-4 flex justify-between">
                      <div>
                        <h3 class="text-sm text-gray-700">
                          <a href="#">
                            <span aria-hidden="true"></span>
                            {{ $product->category->nama }}
                          </a>
                        </h3>
                        <p class="mt-1 text-lg text-gray-500">{{ $product->nama }}</p>
                      </div>
                      <p class="text-xl font-bold text-right text-gray-900">Rp {{ $product->harga }}</p>
                    </div>
                    <a href="{{ route('product.show', ['id' => $product->product_id ]) }}"
                      class="
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
                      Lihat
                    </a>
                  </a>
                </div>
              @endforeach
            </div>
            <!-- /End replace -->
          </div>
        </div>
      </div>
    </section>
  </div>
</x-user-in-layout>
