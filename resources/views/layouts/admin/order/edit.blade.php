<x-admin-layout>
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Ubah Pesanan: {{ $order->user->nama }} 
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded shadow-md dark:bg-gray-800">
      <form method="POST" action="{{ route('admin.order.update', ['id' => $order->order_id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="number" name="admin_id" class="hidden" value="{{ Auth::user()->admin->admin_id }}"
          required>

        <input type="number" name="user_id" class="hidden" value="{{ $order->user->user_id }}"
          required>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Status Sekarang
          </span>
  
          <p class="dark:text-gray-400 text-lg">
            @if ($order->status == "belum-bayar")
              @include('components.user.icons.tag-unpaid')
            @elseif ($order->status == "selesai")
              @include('components.user.icons.tag-done')
            @elseif ($order->status == "dibatalkan")
              @include('components.user.icons.tag-canceled')
            @elseif ($order->status == "sedang-dikirim")
              @include('components.user.icons.tag-send')
            @elseif ($order->status == "sedang-dikemas")
              @include('components.user.icons.tag-pack')
            @else
              @include('components.user.icons.tag-wait')
            @endif
          </p>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Total Harga
          </span>
  
          <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray form-input" 
           name="total_harga" value="{{ $order->total_harga ?? '' }}"/>
        </label>
  
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Tanggal Dipesan</span>
  
          <input type="date" class="rounded border-gray-200 block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray form-input" 
           name="tgl_dipesan" value="{{ $order->tgl_dipesan ?? '' }}" />
        </label>
  
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Tanggal Diterima</span>
  
          <input type="date" class="rounded border-gray-200 block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray form-input" 
           name="tgl_diterima" value="{{ $order->tgl_diterima ?? '' }}" />
        </label>
  
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Ubah Status
          </span>
          <select name="status"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-sp-primary-100 focus:outline-none focus:shadow-outline-sp-primary dark:focus:shadow-outline-gray">
            <option value="belum-bayar">Belum Bayar</option>
            <option value="selesai">Selesai</option>
            <option value="dibatalkan">Dibatalkan</option>
            <option value="sedang-dikirim">Sedang Dikirim</option>
            <option value="sedang-dikemas">Sedang Dikemas</option>
            <option value="menunggu-konfirmasi">Menunggu Konfirmasi</option>
          </select>
        </label>

        <div class="flex items-center gap-2 mt-4 text-sm justify-end">
          <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
            type="button" onclick="window.history.back();">
            Batal
          </button>
          <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-sp-primary-100 border border-transparent rounded active:bg-sp-primary-100 hover:bg-sp-primary-400 focus:outline-none focus:shadow-outline-sp-primary"
            type="submit">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</x-admin-layout>
