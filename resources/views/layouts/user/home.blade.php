<x-user-layout>
  <div class="container px-6 mx-auto grid">
      <!-- CTA -->
      {{-- <a class="flex items-center justify-between p-4 mb-8 my-6 text-sm font-semibold text-sp-primary-50 bg-sp-primary-300 rounded-lg shadow-md focus:outline-none focus:shadow-outline-sp-primary"
        href="#">
        <div class="flex items-center">
          <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <span>Star this project on GitHub</span>
        </div>
        <span>View more &RightArrow;</span>
      </a>
       --}}
      <div class="my-6 p-6 mb-8 bg-white rounded-lg shadow-md focus:outline-none focus:shadow-outline-sp-primary">
        <div class="flex flex-row">
          <label class="inline-flex items-center px-4">
              <input type="checkbox" class="form-checkbox rounded h-5 w-5 text-sp-primary-100" checked><span class="ml-2 text-gray-700">Rempah-rempah dan Bumbu</span>
          </label>

          <label class="inline-flex items-center px-4">
              <input type="checkbox" class="form-checkbox rounded h-5 w-5 text-sp-primary-100" checked><span class="ml-2 text-gray-700">Penyedap</span>
          </label>

          <label class="inline-flex items-center px-4">
              <input type="checkbox" class="form-checkbox rounded h-5 w-5 text-sp-primary-100" checked><span class="ml-2 text-gray-700">Bumbu Masakan</span>
          </label>

          <div class="ml-6 inline-flex items-center">
            <span class="ml-6 mr-3 text-gray-600">Ketahanan :</span>
          </div>

          <div class="inline-flex">
            <select class="rounded border-gray-400">
              <option>< 1 Minggu</option>
              <option>1-2 Minggu</option>
              <option>> 2 Minggu</option>
            </select>
          </div>
      </div>
    </div>
    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div class="shadow-md rounded group relative bg-white p-4">
        <div
          class="w-full min-h-60 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
          <img src="{{ asset('/img/sp/category-3.png') }}"
            alt="Front of men&#039;s Basic Tee in black."
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
        <a
        href="#"
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
        "
      >
        Beli
      </a>
      </div>
    </div>
  </div>
</x-user-layout>
