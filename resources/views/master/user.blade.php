<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://tailwindui.com/css/components-v2.css" />
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer=""></script>
</head>

<body>
  <div _style="max-height: 800px;" _class="overflow-y-auto">
    <div class="bg-white">
      {{ $slot }}
    </div>
  </div>
</body>

</html>
