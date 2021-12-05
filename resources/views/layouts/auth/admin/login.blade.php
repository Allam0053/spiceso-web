<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
  <div class="font-sans antialiased text-gray-900">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
              src="{{  asset('/img/sp/v5.jpg') }}" alt="Office" />
            
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Selamat Datang Admin Spiceso !
              </h1>
              @if ($errors->any())
                <div class="mb-4">
                  <div class="font-medium text-red-600">Whoops! Something went wrong.</div>

                  <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                  {{ session('status') }}
                </div>
              @endif
              <form method="POST" action="{{ route('admin.login.store') }}">
                @csrf
                <label class="block text-sm">
                  <span class="block text-sm font-medium text-gray-700">Email address</span>
                  <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required=""
                        class="
                            appearance-none
                            block
                            w-full
                            px-3
                            py-2
                            border border-gray-300
                            rounded-md
                            shadow-sm
                            placeholder-gray-400
                            focus:outline-none
                            focus:ring-sp-primary-100
                            focus:border-sp-primary-100
                            sm:text-sm
                          " />
                    </div>
                </label>
                <label class="block mt-4 text-sm">
                  <span class="block text-sm font-medium text-gray-700">Password</span>
                  <div class="mt-1">
                    <input id="password" name="password" type="password" autocomplete="current-password" required=""
                        class="
                            appearance-none
                            block
                            w-full
                            px-3
                            py-2
                            border border-gray-300
                            rounded-md
                            shadow-sm
                            placeholder-gray-400
                            focus:outline-none
                            focus:ring-sp-primary-100
                            focus:border-sp-primary-100
                            sm:text-sm
                          " />
                    </div>
                </label>
                <div class="flex items-center mt-4">
                    <input id="remember_me" name="remember_me" type="checkbox"
                      class="
                          h-4
                          w-4
                          text-sp-primary-100
                          focus:ring-sp-primary-100
                          border-gray-300
                          rounded
                        " />
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                      Ingat saya
                    </label>
                  </div>
                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button type="submit"
                    class="
                        w-full
                        flex
                        justify-center
                        py-2
                        px-4
                        border border-transparent
                        rounded-md
                        shadow-sm
                        text-sm
                        font-medium
                        text-white
                        bg-sp-primary-100
                        hover:bg-sp-primary-300
                        focus:outline-none
                        focus:ring-2
                        focus:ring-offset-2
                        focus:ring-sp-primary-100
                        mt-4
                      ">
                    Masuk
                  </button>
              </form>

              <p class="mt-4">
              <div class="text-sm">
                    <a href="#"
                      class="
                          font-medium
                          text-sp-primary-100
                          hover:text-sp-primary-300
                        ">
                      Lupa password?
                    </a>
                  </div>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
