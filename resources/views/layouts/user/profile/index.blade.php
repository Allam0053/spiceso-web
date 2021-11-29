<x-user-in-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  {{-- <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
    <h1 class="text-4xl font-bold tracking-tight text-gray-900">Produk</h1>
  </div>
   --}}
  <section aria-labelledby="products-heading" class="pt-6 pb-24">
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
        Edit Profil
      </h2>

      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Name</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Email</span>
          <!-- focus-within sets the color for the icon when input is focused -->
          <div
            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400"
          >
            <input
              class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
              placeholder="Jane Doe"
            />
            <div
              class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
            >
            @include('components.user.icons.mail')
            </div>
          </div>
        </label>

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Tanggal Lahir</span>
          <input
            class="rounded border-gray-300 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="22/11/2021" type="date"
          />
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Alamat</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="3"
            placeholder="Enter some long form content."
          ></textarea>
        </label>
      </div>
    </div>
    
  </section>
</div>
</x-user-in-layout>