<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Detail Produk: {{ $product->nama }}
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Gambar Produk: {{ count($product->images) }}
        </span>

        @foreach ($product->images as $image)
          <label class="block mt-4 text-sm w-1/2">
            <span class="text-gray-700 dark:text-gray-400">
              {{ $image->nama }}
            </span>

            <img class="w-full object-cover mt-1 mb-2" src="{{ asset($image->link) }}">
          </label>
        @endforeach
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Nama
        </span>

        <p class="dark:text-gray-400 text-lg">
          {{ $product->nama ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>

        <p class="dark:text-gray-400 text-base">
          {{ $product->deskripsi ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Komposisi</span>

        <p class="dark:text-gray-400 text-base">
          {{ $product->komposisi ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Harga
        </span>

        <p class="dark:text-gray-400 text-lg">
          {{ $product->harga ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Stok
        </span>

        <p class="dark:text-gray-400 text-lg">
          {{ $product->stok ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Kategori
        </span>

        <p class="dark:text-gray-400 text-lg">
          {{ $product->category->nama ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Ketahanan
        </span>

        <p class="dark:text-gray-400 text-lg">
          {{ $product->durability->nama ?? '' }}
        </p>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Jumlah Pesanan
        </span>

        <p class="dark:text-gray-400 text-lg">
          {{ count($product->orders) ?? '' }}
        </p>
      </label>
    </div>
  </div>
</x-admin-layout>
