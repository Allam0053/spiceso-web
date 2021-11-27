<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Spiceso Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('/css/tailwind.output.css') }}" />
  <link rel="stylesheet" href="https://tailwindui.com/css/components-v2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('/js/init-alpine.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
  <script src="{{ asset('/js/charts-lines.js') }}" defer></script>
  <script src="{{ asset('/js/charts-pie.js') }}" defer></script>
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('components.admin.sidebar.desktop', [ 'page' => $page ])

    @include('components.admin.sidebar.mobile', [ 'page' => $page ])

    <div class="flex flex-col flex-1 w-full">
      @include('components.admin.header.header')

      <main class="h-full overflow-y-auto">
        {{ $slot }}
      </main>
    </div>
  </div>

  {{ $modal ?? '' }}
</body>

</html>
