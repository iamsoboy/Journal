<x-guest-layout>
    @include('layouts.page_header')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-4 mx-auto">
            <div class="flex flex-wrap -m-2">
                @forelse($boardMembers as $key => $member)
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center p-4 rounded-lg">
                        <img alt="team" class="w-24 h-24 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ env('APP_URL')."/storage/".$member->image }}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">{{ $member->surname }}, {{ $member->other_names }} {{ $member->first_name }}</h2>
                            <div class="text-gray-500">{{ $member->title }}</div>
                            <div class="text-gray-500">{{ $member->school }}</div>
                            <div class="text-gray-500">{{ $member->address }}</div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/84x84">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">No Member of the Editorial Board Found!</h2>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</x-guest-layout>
