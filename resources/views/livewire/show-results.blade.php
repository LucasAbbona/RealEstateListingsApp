<div>
    <div class="w-full px-5 md:px-20 flex flex-col sm:flex-row gap-3">
        <input wire:model="search" type="search" class="p-1.5 rounded-md border border-black w-full" placeholder="Location or Property Title">
        <select wire:model="type" name="" class="border border-black rounded-md p-1.5">
            <option value="">All</option>
            <option value="Rent">Rent</option>
            <option value="Sell">Sale</option>
        </select>
        <select wire:model="price" name="" class="border border-black rounded-md p-1.5">
            <option value="">All</option>
            <option value="0-100">0 - 100.000</option>
            <option value="100-500">100.000 - 500.000</option>
            <option value="500">+ 500.000</option>
        </select>
    </div>
    <div class="flex flex-col md:flex-row flex-wrap md:px-20 px-5">
    @foreach ($listings as $listing)
                    <div class="flex flex-col items-start py-5 px-3 h-auto justify-between rounded-md md:w-1/2 lg:w-1/3">
                        <div class=" h-60 w-full rounded-md overflow-hidden flex justify-center items-center">
                            <img src="{{$listing->photo1 ? asset('storage/'.$listing->photo1) : '' }}" class="h-full w-full" alt="">
                        </div>
                        <p class="font-bold text-xs mt-3">{{$listing->listingtype}}</p>
                        <p class="font-semibold text-xl mt-4">{{$listing->title}}</p>
                        <div class="flex justify-start gap-6 w-full items-center mt-3">
                            <p class="text-lg font-medium">${{$listing->price}}</p>
                            <div class="h-full w-0.5 bg-black"></div>
                            <div class="flex text-xs gap-2">
                                <i class="bi bi-segmented-nav"></i>
                                <p>{{$listing->rooms}}</p>
                            </div>
                            <div class="flex text-xs gap-2">
                                <i class="bi bi-rulers"></i>
                                <p>{{$listing->size}}m<sup>2</sup></p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center my-6">
                            <i class="bi bi-geo-alt"></i>
                            <p class="text-black text-xs font-medium">{{$listing->location}}</p>
                        </div>
                        <div class="flex w-full justify-between items-center">
                            <p class="text-sm xl:text-base">Listed By</p>
                            <div class="flex gap-2">
                                <div class="lg:w-10 lg:h-10 w-8 h-8 rounded-full flex justify-center items-center overflow-hidden"><img src="{{$brokers->where('id',$listing->broker_id)->last()->profile_photo ? asset('storage/'.$brokers->where('id',$listing->broker_id)->last()->profile_photo) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}" class="h-full" alt=""></div>
                                <div class="text-sm">
                                    <p class="font-medium">{{$brokers->where('id',$listing->broker_id)->last()->name}}</p>
                                    <p class="text-xs">{{$brokers->where('id',$listing->broker_id)->last()->sales}} Sales</p>
                                </div>
                            </div>
                            <a href="/property/{{$listing->id}}" class="px-6 py-2 bg-black hover:bg-neutral-900 transition-all text-white text-sm font-medium rounded-md">Send offer</a>
                        </div>
                    </div>
                @endforeach
    </div>
</div>
@livewireScripts
