<x-admin-layout>
  <x-slot name="style">
    <style>
      .hasImage:hover section {
        background-color: rgba(5, 5, 5, 0.4);
      }

      .hasImage:hover button:hover {
        background: rgba(5, 5, 5, 0.45);
      }

      #overlay p,
      i {
        opacity: 0;
      }

      #overlay.draggedover {
        background-color: rgba(255, 255, 255, 0.7);
      }

      #overlay.draggedover p,
      #overlay.draggedover i {
        opacity: 1;
      }

      .group:hover .group-hover\:text-blue-800 {
        color: #2b6cb0;
      }

    </style>
  </x-slot>

  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Tambah Produk
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <div aria-label="File Upload Modal" class="flex flex-col bg-white rounded-md text-sm"
        ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);"
        ondragenter="dragEnterHandler(event);">
        <!-- overlay -->
        <div id="overlay"
          class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
          <i>
            <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24">
              <path
                d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
            </svg>
          </i>
          <p class="text-lg text-blue-700">Drop files to upload</p>
        </div>

        <!-- scroll area -->
        <div class="h-full overflow-auto w-full flex flex-col">
          <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
            <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
              <span>Drag dan drop gambar produk disini</span>
            </p>
            <input id="hidden-input" type="file" multiple class="hidden" />
            <button id="button"
              class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
              Upload Gambar
            </button>
          </header>

          <h1 class="pt-2 text-gray-700 dark:text-gray-400">
            Gambar Produk
          </h1>

          <ul id="gallery" class="flex flex-1 flex-wrap">
            <li id="empty" class="h-full w-full text-center flex flex-col justify-center items-center">
            </li>
          </ul>
        </div>
      </div>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Nama
        </span>
        <input
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
          placeholder="Nama Produk" />
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
        <textarea
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          rows="3" placeholder="Deskripsi singkat terkait produk."></textarea>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Harga
        </span>
        <input
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
          type="number" placeholder="Rp 0.00,-" />
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Stok
        </span>
        <input
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
          type="number" placeholder="Jumlah Produk" />
      </label>
    </div>
  </div>

  <template id="image-template">
    <li class="block p-1 w-32 h-24">
      <article tabindex="0"
        class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
        <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1"></h1>
          <div class="flex">
            <span class="p-1">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24">
                  <path
                    d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                </svg>
              </i>
            </span>

            <p class="p-1 size text-xs"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none"
                  d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>

  <x-slot name="script">
    <script>
      const imageTempl = document.getElementById("image-template"),
        empty = document.getElementById("empty");

      let FILES = {};

      function addFile(target, file) {
        const isImage = file.type.match("image.*"),
          objectURL = URL.createObjectURL(file);

        const clone = imageTempl.content.cloneNode(true);

        clone.querySelector("h1").textContent = file.name;
        clone.querySelector("li").id = objectURL;
        clone.querySelector(".delete").dataset.target = objectURL;
        clone.querySelector(".size").textContent =
          file.size > 1024 ?
          file.size > 1048576 ?
          Math.round(file.size / 1048576) + "mb" :
          Math.round(file.size / 1024) + "kb" :
          file.size + "b";

        isImage &&
          Object.assign(clone.querySelector("img"), {
            src: objectURL,
            alt: file.name
          });

        empty.classList.add("hidden");
        target.prepend(clone);

        FILES[objectURL] = file;
      }

      const gallery = document.getElementById("gallery"),
        overlay = document.getElementById("overlay");

      const hidden = document.getElementById("hidden-input");
      document.getElementById("button").onclick = () => hidden.click();
      hidden.onchange = (e) => {
        for (const file of e.target.files) {
          addFile(gallery, file);
        }
      };

      const hasFiles = ({
          dataTransfer: {
            types = []
          }
        }) =>
        types.indexOf("Files") > -1;

      let counter = 0;

      function dropHandler(ev) {
        ev.preventDefault();
        for (const file of ev.dataTransfer.files) {
          addFile(gallery, file);
          overlay.classList.remove("draggedover");
          counter = 0;
        }
      }

      function dragEnterHandler(e) {
        e.preventDefault();
        if (!hasFiles(e)) {
          return;
        }
        ++counter && overlay.classList.add("draggedover");
      }

      function dragLeaveHandler(e) {
        1 > --counter && overlay.classList.remove("draggedover");
      }

      function dragOverHandler(e) {
        if (hasFiles(e)) {
          e.preventDefault();
        }
      }

      gallery.onclick = ({
        target
      }) => {
        if (target.classList.contains("delete")) {
          const ou = target.dataset.target;
          document.getElementById(ou).remove(ou);
          gallery.children.length === 1 && empty.classList.remove("hidden");
          delete FILES[ou];
        }
      };

      document.getElementById("submit").onclick = () => {
        alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
        console.log(FILES);
      };

      document.getElementById("cancel").onclick = () => {
        while (gallery.children.length > 0) {
          gallery.lastChild.remove();
        }
        FILES = {};
        empty.classList.remove("hidden");
        gallery.append(empty);
      };
    </script>
  </x-slot>
</x-admin-layout>
