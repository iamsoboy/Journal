<x-guest-layout>
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200 text-justify">
                <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    {{ $pageTitle }}
                </h2>
            </div>
        </div>

        <div class="flex flex-col bg-[#ECEFF2] dark:bg-gray-900">
            <div class="relative w-full py-[20px]">
                <div class="container z-1">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-9 ">
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-lg rounded-2xl shadow-sm w-full relative px-4 mb-4">
                                <div class="flex justify-between">
                                    <p class="dark:text-slate-200 text-lg">
                                        International Editorial Board Members
                                    </p>
                                </div>
                            </div>

                            @forelse($editors as $key => $editor)
                                <div class="px-4 pt-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $editor->name }}
                                    </h5>
                                    <p class="font-normal text-gray-900 dark:text-gray-400">
                                        {{ $editor->position }}<br>
                                        {{ $editor->school }}<br>
                                        {{ $editor->address }}
                                    </p>
                                </div>
                            @empty
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No Editorial Board Member(s) found.</h5>
                                </div>
                            @endforelse

                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-3 ">
                            <!-- Navigation -->
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12">
                                    <div class="flex flex-col rounded-md shadow-sm" role="group">
                                        <a href="{{route('welcome')}}" type="button" class="no-underline px-4 py-2 text-lg font-medium text-white bg-blue-700 border border-gray-900 rounded-lg hover:bg-gray-900 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                            Home
                                        </a>
                                        <a href="{{ route('guideline') }}" type="button" class="no-underline px-4 py-2 text-lg font-medium text-white bg-blue-700 border-t border-b border-gray-900 rounded-lg hover:bg-gray-900 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                            Manuscript Guidelines
                                        </a>
                                        <a href="{{ route('manuscript') }}" type="button" class="no-underline px-4 py-2 text-lg font-medium text-white bg-blue-700 border border-gray-900 rounded-lg hover:bg-gray-900 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                            Submit Manuscript
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->

                            <div class="flex justify-between bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                                <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Call for Paper</span>
                                <div class="px-2 py-1 text-xs font-medium leading-none text-center items-center justify-center text-white bg-red-600 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">new</div>
                            </div>

                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12">
                                    <marquee direction="up" class="bg-white h-64 dark:bg-gray-800/40 backdrop-blur-2xl rounded-2xl shadow-lg w-full relative p-4 text-justify">
                                        <p>
                                            Scholars and Researchers in the academic community and other institutions are invited to submit their
                                            research articles for publication.
                                        </p>
                                        <p>
                                            An Author wishing to submit a paper should ensure that it has not been
                                            previously published or its being considered for publication in another journal.
                                        </p>
                                        <p>
                                            The manuscript should be the Author's original work. IIARD invites Researchers, Academicians, Professionals,
                                            Practitioners, and Students from all over the world to submit high-quality theoretical and empirical
                                            original research papers, case studies, review papers, literature reviews, book reviews, conceptual
                                            framework, analytical and simulation models, and technical notes for publication.
                                        </p>
                                        <p aria-hidden="true">
                                            Scholars and Researchers in the academic community and other institutions are invited to submit their
                                            research articles for publication.
                                        </p>
                                    </marquee> <!--end card-->
                                </div><!--end col-->
                            </div><!--end grid-->

                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                                <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Indexation</span>
                            </div>
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative">
                                        <!-- IMAGE BRAND -->
                                        <img alt="logo" class="flex-shrink-0 object-cover object-center mx-auto rounded" src="{{ config('app.url')."/image/placeholder.png" }}">
                                    </div> <!--end card-->
                                </div><!--end col-->
                            </div><!--end grid-->

                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                                <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Partners</span>
                            </div>
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative">
                                        <!-- IMAGE BRAND -->
                                        <img alt="logo" class="flex-shrink-0 object-cover object-center mx-auto rounded" src="{{ config('app.url')."/image/partners.png" }}">
                                    </div> <!--end card-->
                                </div><!--end col-->
                            </div><!--end grid-->

                        </div><!--end col-->
                    </div><!--end inner-grid-->
                </div><!--end container-->
            </div><!--end section-->
        </div><!--end Main-->

    </div>
</x-guest-layout>
