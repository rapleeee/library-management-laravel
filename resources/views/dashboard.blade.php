<x-app-layout>
    <section class="bg-white dark:bg-gray-900 lg:pl-64  ">
        <nav class="bg-white border-gray-200 p-4 dark:bg-gray-900 drop-shadow-lg">
            <div class="flex flex-wrap justify-end items-center mx-auto max-w-screen-xl gap-6">
                <p class="text-gray-900 dark:text-gray-300">{{ now()->format('l, d M Y | H:i') }}</p>
                <i class="fa-regular fa-calendar dark:text-gray-200"></i>
                <button id="theme-toggle">
                    <i id="theme-toggle-icon" class="fas fa-sun dark:text-gray-200"></i>
                </button>
            </div>
        </nav>
        <div class="grid  bg-slate-300 rounded-lg p-4 m-12 dark:bg-gray-600 lg:gap-8 xl:gap-8 lg:py-16 lg:grid-cols-12">
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/img/siswa.png') }}" class="w-full max-w-md " alt="mockup">
            </div>
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-base font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Selamat Pagi, {{ Auth::user()->name }}!</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia possimus hic autem fuga alias
                    itaque aliquid nam perferendis architecto corrupti dolorum vitae, accusamus iure sit, ratione
                    recusandae quasi adipisci porro.</p>
                @if (Auth::user()->role == 'admin')

                    <a href="{{route('books.index')}}"
                        class="inline-flex items-center justify-center px-5 py-2.5 mr-3 text-base font-medium text-center text-gray-900  border border-gray-300 rounded-lg bg-gray-300 hover:bg-gray-400 hover:text-white focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Buka Lemari
                    </a>
                    <a href="{{route('books.index')}}"
                        class="inline-flex items-center justify-center px-5 py-2.5 text-base bg-[#A78B61] font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-[#88714f] focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Kelola Lemari
                    </a>
                @endif

                @if (Auth::user()->role == 'anggota')


                    <a href="{{route('books.index')}}"
                        class="inline-flex items-center justify-center px-5 py-2.5 mr-3 text-base font-medium text-center text-gray-900  border border-gray-300 rounded-lg bg-gray-300 hover:bg-gray-400 hover:text-white focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Buka Lemari
                    </a>
                    <a href="{{route('books.index')}}"
                        class="inline-flex items-center justify-center px-5 py-2.5 text-base bg-[#A78B61] font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-[#88714f] focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Pinjam Buku
                    </a>
                @endif
            </div>
        </div>
    </section>
    <section class="flex flex-row justify-between items-center lg:pl-64 p-4 mt-12 mx-12">
        <div class="p-12 bg-white rounded-lg shadow dark:bg-[#6E987C]">
            <div class="flex-col flex items-center">
                <div class="flex flex-row justify-between items-center gap-8">
                    <i class="fa-solid fa-book text-6xl text-white"></i>
                    <h1 class="text-6xl text-white">19</h1>
                </div>
                <p class="text-2xl text-white mt-12">Buku Lemari</p>
            </div>
        </div>
        <div class="p-12 bg-white rounded-lg shadow dark:bg-[#22615D]">
            <div class="flex-col flex items-center">
                <div class="flex flex-row justify-between items-center gap-8">
                    <i class="fa-solid fa-book text-6xl text-white"></i>
                    <h1 class="text-6xl text-white">19</h1>
                </div>
                <p class="text-2xl text-white mt-12">Buku Lemari</p>
            </div>
        </div>
        <div class="p-12 bg-white rounded-lg shadow dark:bg-[#FBC78F]">
            <div class="flex-col flex items-center">
                <div class="flex flex-row justify-between items-center gap-8">
                    <i class="fa-solid fa-book text-6xl text-white"></i>
                    <h1 class="text-6xl text-white">19</h1>
                </div>
                <p class="text-2xl text-white mt-12">Buku Lemari</p>
            </div>
        </div>
        <div class="p-12 bg-white rounded-lg shadow dark:bg-[#AC455E]">
            <div class="flex-col flex items-center">
                <div class="flex flex-row justify-between items-center gap-8">
                    <i class="fa-solid fa-book text-6xl text-white"></i>
                    <h1 class="text-6xl text-white">19</h1>
                </div>
                <p class="text-2xl text-white mt-12">Buku Lemari</p>
            </div>
        </div>
    </section>
</x-app-layout>
