<x-guest-layout>

    @include('layouts.page_header')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto">
            <div class="flex flex-wrap -m-4 pb-8">
                @forelse($journals as $key => $journal)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a href="{{ route('journals.show', $journal->id) }}" class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ config('app.url')."/storage/".$journal->image }}">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1 uppercase">{{ $journal->category->name ?? 'Uncategorized' }}</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $journal->title }}</h2>
                        @if($journal->cost)
                            <p class="mt-1">$ {{ number_format($journal->cost) }}</p>
                        @endif
                    </div>
                </div>
                @empty
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">JOURNAL TITLE</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">JOURNAL DESCRIPTION</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                @endforelse
            </div>

            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            {{ $journals->onEachSide(5)->links() }}
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-guest-layout>
