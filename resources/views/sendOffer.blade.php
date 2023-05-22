<x-layout>
    <x-navbar />
    <div class="OutNavbar md:px-20 px-5 py-5 mb-20">
        <div class="w-full flex flex-col md:flex-row p-5">
            <img src="{{$listing->photos ? asset('storage/'.$listing->photos) : '' }}" class="rounded-md w-full md:w-1/2" alt="">
            <div class="md:w-1/2 md:p-10 py-5 md:py-0 text-black flex flex-col">
                <p class="text-orange-600 font-bold text-base">{{$listing->listingtype}}</p>
                <p class="text-2xl font-medium">{{$listing->title}}</p>
                <p class="text-gray-500 mt-5"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>
                <div class="flex text-sm font-medium gap-4 my-5">
                    <p>{{$listing->rooms}} Rooms</p>
                    <p>{{$listing->size}} m<sup>2</sup></p>
                </div>
                <p class="mt-10 text-xl font-medium text-end">Price: ${{$listing->price}}</p>
            </div>
        </div>
        <form action="/send-offer" method="POST" class="flex flex-col gap-3 mt-10">
            @csrf
            @method('POST')
            <div>
                <h3 class="text-center text-3xl font-medium">Offert's formulary</h3>
                <p class="text-center text-orange-600 mt-2">Complete all the fields correctly and check the policies.</p>
            </div>
            <input type="hidden" name="listing_id" value="{{$listing->id}}">
            <input type="hidden" name="broker_id" value="{{$listing->broker_id}}">
            <div class="flex flex-col">
                <label  for="">FullName</label>
                <input type="text" class="p-1.5 border border-black rounded-md" name="name">
                @error('name')
                    <p class="text-red-600 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label  for="">Email</label>
                <input type="email" class="p-1.5 border border-black rounded-md" name="email">
                @error('email')
                    <p class="text-red-600 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label  for="">Phone</label>
                <input type="numer" class="p-1.5 border border-black rounded-md" name="phone">
                @error('phone')
                    <p class="text-red-600 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="">Conditions</label>
                <textarea name="conditions" class="border border-black rounded-md p-1.5" cols="30" rows="6"></textarea>
                @error('conditions')
                    <p class="text-red-600 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="">Price Proporsal</label>
                <input type="number" class="border border-black rounded-md p-1.5" name="offer" id="">
                @error('offer')
                    <p class="text-red-600 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <div class="flex gap-2">
                    <input type="checkbox" name="policies" id="">
                    <p>I'm concerned about the policies</p>
                </div>
                @error('policies')
                    <p class="text-red-600 text-sm">{{$message}}</p>
                @enderror
            </div>
            <button class="bg-black transition-all hover:bg-neutral-900 py-4 w-full rounded-md font-semibold text-white">Send Offer</button>
        </form>
    </div>
    <x-footer />
</x-layout>