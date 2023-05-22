<x-layout>
    <x-manageNavbar/>
    <a href="/" class="absolute top-20 left-5 flex items-center text-sm font-medium gap-2"><i class="bi bi-box-arrow-in-left text-2xl"></i>Home</a>
    <h3 class="mt-16 md:pl-20 px-5 md:px-0 font-semibold text-2xl py-5">Selling</h3>
    <div class="flex flex-col md:flex-row flex-wrap px-5 md:px-20">
        @foreach ($listings as $listing)    
            <div class="sm:w-1/2 md:w-1/3 p-3">
                <div class="w-full h-40 overflow-hidden flex items-center justify-center">
                    <img src="{{$listing->photos ? asset('storage/'.$listing->photos) : '' }}" class=" h-56" alt="">
                </div>
                <div class="flex flex-col gap-2">
                    <p class="font-medium text-lg">{{$listing->title}}</p>
                    <p class="text-sm"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>
                    <div class="flex gap-3 text-sm">
                        <p>{{$listing->size}} m<sup>2</sup></p>
                        <p>{{$listing->rooms}} Rooms</p>    
                    </div>
                    <a href="/property/{{$listing->id}}" class="w-full bg-orange-400 hover:bg-orange-500 transition-all text-white font-semibold rounded-md py-2 text-center">View</a>
                    <a href="/edit/{{$listing->id}}" class="w-full bg-blue-400 hover:bg-blue-500 transition-all text-white font-semibold rounded-md py-2 text-center">Edit</a>
                    <form action="/delete/{{$listing->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="w-full bg-red-500 hover:bg-red-600 transition-all text-white font-semibold rounded-md py-2 text-center">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="mt-16 md:pl-20 px-5 md:px-0 font-semibold text-2xl py-5">Renting</h3>
    <div class="flex flex-col md:flex-row flex-wrap px-5 md:px-20">
        @foreach ($listingsRent as $listing)    
            <div class="sm:w-1/2 md:w-1/3 p-3">
                <div class="w-full h-40 overflow-hidden flex items-center justify-center">
                    <img src="{{$listing->photo1 ? asset('storage/'.$listing->photo1) : '' }}" class=" h-56" alt="">
                </div>
                <div class="flex flex-col gap-2">
                    <p class="font-medium text-lg">{{$listing->title}}</p>
                    <p class="text-sm"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>
                    <div class="flex gap-3 text-sm">
                        <p>{{$listing->size}} m<sup>2</sup></p>
                        <p>{{$listing->rooms}} Rooms</p>    
                    </div>
                    <a href="/property/{{$listing->id}}" class="w-full bg-orange-400 hover:bg-orange-500 transition-all text-white font-semibold rounded-md py-2 text-center">View</a>
                    <a href="/edit/{{$listing->id}}" class="w-full bg-blue-400 hover:bg-blue-500 transition-all text-white font-semibold rounded-md py-2 text-center">Edit</a>
                    <form action="/delete/{{$listing->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="w-full bg-red-500 hover:bg-red-600 transition-all text-white font-semibold rounded-md py-2 text-center">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>