<x-guest-layout>

    <div class=" w-full px-5 py-24 mx-auto lg:px-32">
        <div class="flex flex-col lg:flex-row lg:space-x-12 pb-6">
            <div class="order-last w-full max-w-screen-sm m-auto mt-12 lg:w-1/4 lg:order-first">
                <div class="p-4 transition duration-500 ease-in-out transform bg-white border rounded-lg">
                    <div class="flex py-2 mb-4">
                        <img src="{{ config('app.url')."/storage/".$journal->image }}">
                    </div>

                    <div class="flex flex-col rounded-md shadow-sm" role="group">
                        <a href="{{ route('current-issue', $journal->id) }}" type="button" class="no-underline uppercase px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-l-lg hover:text-blue-800 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                            Current Issues
                        </a>
                        <a href="{{ route('archive', $journal->id) }}" type="button" class="no-underline uppercase px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 hover:text-blue-800 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                            Archives
                        </a>
                        <a href="#" type="button" class="px-4 py-2 text-sm font-medium uppercase text-gray-900 bg-transparent border border-gray-900 rounded-r-md hover:text-blue-800 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                            Manuscript Guidelines
                        </a>
                    </div>

                </div>
            </div>
            <div class="w-full px-4 mt-12 prose lg:px-0 lg:w-3/4 text-justify">
                <div class="mb-5 border-b border-gray-200">
                    <div class="flex flex-wrap items-baseline -mt-2">
                        <p class="mt-1 font-bold text-2xl">{{ $journal->title }}</p>
                    </div>
                    <div class="text-base font-semibold">
                        <p>E-ISSN: {{ $journal->unique_code }}</p>
                        <p>P-ISSN: {{ $journal->issn }}</p>
                        <p>DOI: {{ $journal->doi }}</p>
                    </div>
                </div>
                {!! $journal->body !!}
            </div>
        </div>
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <section class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-4 mx-auto">
                    <div class="w-full max-w-screen-sm m-auto mt-12 lg:w-1/4">
                        <button class="flex items-center px-6 py-2 mt-auto text-lg text-white transition duration-500 ease-in-out transform bg-blue-600 border border-current rounded hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Corresponding Article(s)</button>
                    </div>
                    <div class="-my-8 divide-y-2 divide-gray-100 pt-8">
                        @forelse($articles as $article)
                            <div class="py-4 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                <span class="font-semibold title-font text-gray-700">{{ $journal->category->name ?? 'Uncategorized' }}</span>
                                <span class="mt-1 text-gray-500 text-sm">{{ $article->created_at }}</span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-lg font-medium text-gray-900 title-font mb-2">{{ $article->title }}</h2>
                                <p class="leading-relaxed">
                                    {!! \Illuminate\Support\Str::words($article->abstract, 20, '...') !!}
                                </p>
                                <a href="{{ route('article.show', $article->id) }}" class="text-indigo-500 inline-flex items-center mt-4">Read More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @empty
                            <div class="py-4 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                <span class="mt-1 text-gray-500 text-sm">{{ now()->toDateTimeString() }}</span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">No Articles Found!!!</h2>
                                <a href="{{ route('welcome') }}" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                    <div class="flex flex-1 justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                        <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                {{ $articles->onEachSide(5)->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-guest-layout>
