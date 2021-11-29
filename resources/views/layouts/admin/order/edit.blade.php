<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Ubah Produk: {{ $product->nama }}
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form method="POST" action="{{ route('admin.product.update', ['id' => $product->product_id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="number" name="admin_id" class="hidden" value="{{ Auth::user()->admin->admin_id }}"
          required>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Gambar Produk (max 3 gambar)
          </span>

          <div class="mt-2" id="image-control">
            <button
              class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple flex items-center gap-2"
              type="button" id="add-image">
              @include('components.admin.icons.plus')
              <p>Tambah Gambar</p>
            </button>
          </div>

          @php
            $counter = 0;
          @endphp

          @foreach ($product->images as $image)
            @php
              $counter++;
            @endphp
  
            <label class="block mt-4 text-sm w-1/2" id="image-item-{{ $counter }}">
              <span class="text-gray-700 dark:text-gray-400" id="image-name-{{ $counter }}">
                {{ $image->nama }}
              </span>

              <input id="image-place-{{ $counter }}" type="file" name="gambars[]" class="form-control hidden" data-id="{{ $counter }}">
              <img class="w-full object-cover mt-1 mb-2" id="image-preview-{{ $counter }}" src="{{ asset($image->link) }}">

              <button
                class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                id="insert-image" type="button" data-id="{{ $counter }}">
                Ubah Gambar
              </button>
              <button
                class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                id="delete-image" type="button" data-id="{{ $counter }}">
                Hapus
              </button>
            </label>
          @endforeach
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Nama
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            name="nama" value="{{ $product->nama ?? '' }}" required />
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            name="deskripsi" rows="3" value="{{ $product->deskripsi ?? '' }}">{{ $product->deskripsi ?? '' }}</textarea>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Harga
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            name="harga" type="number" value="{{ $product->harga ?? '' }}" />
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Stok
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            name="stok" type="number" value="{{ $product->stok ?? '' }}" />
        </label>

        <div class="flex items-center gap-2 mt-4 text-sm justify-end">
          <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
            type="button" onclick="window.history.back();">
            Batal
          </button>
          <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            type="submit">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

  <x-slot name="script">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        var counter = {!! json_encode(count($product->images)) !!};
        var marker = counter;

        $("#add-image").click(function() {
          if (counter < 3) {
            $("#image-control").after(`
              <label class="block mt-4 text-sm w-1/2" id="image-item-${marker + 1}">
                <span class="text-gray-700 dark:text-gray-400" id="image-name-${marker + 1}">
                  Gambar Produk
                </span>

                <input id="image-place-${marker + 1}" type="file" name="gambars[]" class="form-control hidden" data-id="${marker + 1}">
                <img class="w-full object-cover mt-1 mb-2" id="image-preview-${marker + 1}" src="">

                <button
                  class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                  id="insert-image" type="button" data-id="${marker + 1}">
                  Upload Gambar
                </button>
                <button
                  class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                  id="delete-image" type="button" data-id="${marker + 1}">
                  Hapus
                </button>
              </label>
            `);
            counter += 1;
            marker += 1;
          }

          if (counter == 3) {
            $("#image-control").hide();
          }
        });

        $("body").on("click", "#delete-image", function(e) {
          event.preventDefault();
          
          var num = $(this).data("id"); 
          $("#image-item-" + num).remove();
          counter -= 1;

          if (counter < 3) {
            $("#image-control").show();
          }
        });

        function readURL(target, input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              target.attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("body").on('change', "input[id*='image-place']", function(e) {
          var num = $(this).data("id"); 
          readURL($("#image-item-" + num).children("img"), this);

          $("#image-item-" + num).children("#insert-image").html("Ubah Gambar");
          
          var filename = $(this).val().split(/(\\|\/)/g).pop()
          $("#image-name-" + num).html(filename);
        });

        $("body").on("click", "#insert-image", function() {
          var num = $(this).data("id"); 
          $("#image-place-" + num).click();
        });
      });
    </script>
  </x-slot>
</x-admin-layout>
