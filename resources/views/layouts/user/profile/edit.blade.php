<x-user-in-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- <div class="relative z-10 flex items-baseline justify-between pt-10 pb-8 border-b border-gray-200">
    <h1 class="text-4xl font-bold tracking-tight text-gray-900">Produk</h1>
  </div> --}}
        <section aria-labelledby="products-heading" class="pt-6 pb-24">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Edit Profil
                </h2>

                <form class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"  
                    method="POST" action="{{ route('user.profil.update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="number" name="user_id" class="hidden" value="{{ Auth::user()->user->user_id }}"
                    required>

                    <input type="number" name="account_id" class="hidden" value="{{ Auth::user()->account_id }}"
                    required>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Nama</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="nama" value="{{ $profile->nama ?? '' }}" />
                    </label>

                    <label class="block mt-4  text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <!-- focus-within sets the color for the icon when input is focused -->
                        <div
                            class="relative text-gray-300 focus-within:text-sp-primary-300 dark:focus-within:text-sp-primary-400">
                            <input
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray form-input"
                                name="email" value="{{ $profile->account->email ?? '' }}" />
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                @include('components.user.icons.mail')
                            </div>
                        </div>
                    </label>

                    <label class="block  mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Telepon</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="no_hp" value="{{ $profile->no_hp ?? '' }}" />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Alamat</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray"
                            rows="3"  name="alamat">{{ $profile->alamat ?? '' }}</textarea>
                    </label>

                    <div class="grid grid-rows-1 gap-3 grid-flow-col">
                        <div class="col-span-10"></div>
                        <button
                            class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-300 border border-transparent rounded active:bg-gray-400 hover:bg-gray-600 focus:outline-none focus:shadow-outline-gray"
                            type="button" onclick="window.history.back();">
                            Batal
                        </button>
                        <button
                            class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-sp-primary-100 border border-transparent rounded active:bg-sp-primary-200 hover:bg-sp-primary-300 focus:outline-none focus:shadow-outline-sp-primary"
                            type="submit">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</x-user-in-layout>
