<x-app-layout>


    <div class="py-12">
        <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Category List</h1>
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </a>
                    @session('success')
                        <div class="p-4 text-green-500 text-center border-2 shadow-emerald-200 shadow-md">
                            {{ session('success') }}
                        </div>
                    @endsession



                    <div class="flex flex-wrap gap-3 col-span-6">
                        @foreach ($categories as $c)
                            <div class="">
                                <p>{{ $c->name }}</p>
                                <form action="{{ route('categories.destroy', $c->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-400 p-2 rounded-md text-red-50">Delete</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
