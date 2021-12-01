<x-user-in-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <section aria-labelledby="products-heading" class="pt-6 pb-24">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Profil
                </h2>

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="grid grid-rows-1 grid-flow-col">
                            <h3 class="mt-1 max-w-3xl text-gray-700 col-span-12">
                                Informasi dan Data Diri
                            </h3>
                            <button
                                class="flex items-center justify-center py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray">
                                @include('components.user.icons.edit')
                                <span class="px-2">Edit</span>
                            </button>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama Lengkap
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $profile->nama }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $profile->account->email }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    No Telepon
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 {{  $profile->no_hp ? '' : 'text-red-400 font-medium'}}">
                                    {{ $profile->no_hp ? $profile->no_hp : 'Belum ada telepon'}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 ">
                                    Alamat
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 {{  $profile->alamat ? '' : 'text-red-400 font-medium'}}">
                                    {{ $profile->alamat ? $profile->alamat : 'Belum ada alamat'}}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-4">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="grid grid-rows-1 grid-flow-col">
                            <h3 class="mt-1 max-w-3xl text-gray-700 col-span-12">
                                Edit Password?
                            </h3>
                            <button
                                class="flex items-center justify-center py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray">
                                @include('components.user.icons.edit')
                                <span class="px-2">Edit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-user-in-layout>
