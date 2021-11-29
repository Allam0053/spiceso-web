<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Tambah Produk
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form method="POST" action="{{ route('admin.products.store') }}"  enctype="multipart/form-data">
        @csrf

        <input type="number" name="admin_id" class="hidden" value="{{ Auth::user()->admin->admin_id }}" required>

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
          <div class="hidden" id="image-container">
            <label class="block mt-4 text-sm w-1/2" id="image-item">
              <span class="text-gray-700 dark:text-gray-400">
                Nama
              </span>

              <input id="image-place" type="file" name="gambars[]" class="form-control hidden">
              <img class="w-full object-cover mt-1 mb-2" id="image-preview" src="">

              <button
                class="px-4 py-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                id="insert-image" type="button">
                Upload Gambar
              </button>
              <button
                class="px-4 py-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                id="delete-image">
                Hapus
              </button>
            </label>
          </div>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Nama
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            name="nama" placeholder="Nama Produk" required/>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            name="deskripsi" rows="3" placeholder="Deskripsi singkat terkait produk."></textarea>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Harga
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            name="harga" type="number" placeholder="Rp 0.00,-" />
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Stok
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            name="stok" type="number" placeholder="Jumlah Produk" />
        </label>

        <div class="flex items-center gap-2 mt-4 text-sm justify-end">
          <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
            type="button">
            Batal
          </button>
          <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            type="submit">
            Tambah
          </button>
        </div>
      </form>
    </div>
  </div>

  <x-slot name="script">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        var counter = 0;
        var state = "add";

        $("#add-image").click(function() {
          $("#image-container").children("label").children("span").html("Gambar Produk " + (counter + 1));
          var html = $("#image-container").html();

          if (counter < 3) {
            $("#image-control").after(html);
            counter += 1;
          }

          if (counter == 3) {
            $("#image-control").hide();
          }
        });

        $("body").on("click", "#delete-image", function() {
          event.preventDefault();

          $(this).parents("#image-item").remove();
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

        $("body").on('change', "#image-place", function() {
          readURL($(this).parents("#image-item").children("img"), this);
          $(this).parents("#image-item").children("#insert-image").html("Ubah Gambar");
        });

        $("body").on("click", "#insert-image", function() {
          $('#image-place').click();
        });
      });
    </script>
  </x-slot>
</x-admin-layout>
