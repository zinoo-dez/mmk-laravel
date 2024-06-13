<x-app-layout>
    <div>
        <h1 class="text-5xl font-bold text-red-500 text-center my-5">Articles</h1>
        @foreach ($posts as $p)
            <div class="p-5 w-4/6 bg-slate-50 m-auto mt-5 rounded-xl shadow-xl">
                <h3 class="text-red-400 text-2xl capitalize">{{ $p->name }}</h3>
                <h4><a href="">{{$p->category->name}}</a> </h4>
                <p class="flex justify-between">
                    {{ $p->created_at->diffForHumans() }}
                    <span>Auther:: <b class="text-red-600"><a href="">{{ $p->user->name }}</a></b> </span>
                </p>
                <p>{{ $p->description }}</p>
                <button
                    class="p-1 px-3 bg-red-700 hover:bg-red-200  hover:text-red-700 text-red-100  rounded-lg mt-3 font-bold">See
                    Mores</button>
            </div>
        @endforeach

    </div>
    <div>
        {{ $posts->links() }}
    </div>

</x-app-layout>
