<x-guest-layout>
    @include('layouts.page_header')
    <section>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
            <div class="grid grid-cols-1">
                <div class="w-full max-w-lg mx-auto my-4 bg-white shadow-xl rounded-xl">
                    <img alt="team" class="flex-shrink-0 object-cover object-center w-50 h-50 mx-auto -mt-8 shadow-xl aboslute" src="{{ config('app.url')."/image/logo.png" }}">

                    <div class="p-6 text-center">
                        <span class="mb-8 text-lg font-semibold tracking-widest text-blue-600 uppercase"> IIGD</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-4 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="leading-relaxed text-lg text-justify">
                    The International Institute for Global Development (IIGD) is a premier international organization dedicated to fostering research and development in a wide range of fields. Through its various publications, conferences, and other initiatives, IIGD aims to promote the exchange of ideas and the sharing of research findings among researchers, academicians, and industry professionals from around the world.
                    <br class="py-4">
                    One of the key activities of IIGD is the publication of high-quality research papers, articles, and journals in a variety of disciplines, including Education, Engineering, Technology, Applied Sciences, Management, Economics, Social Sciences, Humanities etc. These publications serve as a valuable resource for researchers and academicians, providing them with access to cutting-edge research and ideas in their respective fields.
                </p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
            </div>
        </div>
    </section>
</x-guest-layout>
