<x-layout>
    <x-navbar/>
    <div>
        <img src="https://files.elfsight.com/storage/dec0864c-9323-4108-9d26-822a2521a114/0addb3d4-94fb-4a76-a49e-c4dd2cee2b6d.jpeg" alt="">
        <div class="absolute text-white flex flex-col items-center w-full top-36 md:-bottom-32">
            <h3 class="w-1/2 text-center font-semibold text-2xl md:text-4xl lg:text-7xl md:mb-12 mb-5 shadow-white">Smartest Way To Find Your Home</h3>
            <p class="md:w-1/3 w-1/2 text-center text-xs md:text-sm mb-5 lg:mb-1">Residences can be classified by and how they are connecter to neighbour residences and land. Different types of housing tenure can be used for the same physical type.</p>
            <form action="/search" method="get" class="hidden bg-white w-1/2 lg:w-1/3 sm:flex justify-between py-1 px-0.5 items-center rounded-md">
                @csrf
                @method('GET')
                <i class="bi bi-search text-black pl-4 text-lg"></i>
                <input type="text" name="search" class="w-full text-sm p-2 outline-none text-black" placeholder="Search by Location or Property ID">
                <button type="submit" class="bg-black hover:bg-neutral-900 transition-all py-2 px-7 font-medium rounded-md mr-0.5">Search</button>
            </form>
            <div class="p-5 rounded-md lg:mt-5 xl:mt-20 bg-white items-center w-1/2 h-36 text-black hidden lg:flex justify-around">
                <div class="flex flex-col items-center gap-2 text-3xl">
                    <p class="font-medium">1500+</p>
                    <p class="text-xl">Property ready</p>
                </div>
                <div class="w-0.5 h-full bg-black"></div>
                <div class="flex flex-col items-center gap-2 text-3xl">
                    <p class="font-medium">700+</p>
                    <p class="text-xl">Ongoing</p>
                </div>
                <div class="w-0.5 h-full bg-black"></div>
                <div class="flex flex-col items-center gap-2 text-3xl">
                    <p class="font-medium">1900+</p>
                    <p class="text-xl">Happy Customers</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:w-3/4 px-16 md:px-0 mx-auto mt-16 gap-10">
            <div class="flex flex-col gap-1 items-start">
                <i class="bi bi-lightning-charge bg-yellow-200 text-xl px-2 py-1 rounded-full"></i>
                <p class="font-medium mb-2">High Quality</p>
                <p class="text-xs font-semibold">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard</p>
            </div>
            <div class="flex flex-col gap-1 items-start">
                <i class="bi bi-tag bg-purple-400 text-xl px-2 py-1 rounded-full"></i>
                <p class="font-medium mb-2">Best Price</p>
                <p class="text-xs font-semibold">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard</p>
            </div>
            <div class="flex flex-col gap-1 items-start">
                <i class="bi bi-brightness-high bg-pink-300 text-xl px-2 py-1 rounded-full"></i>
                <p class="font-medium mb-2">Luxury</p>
                <p class="text-xs font-semibold">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard</p>
            </div>
            <div class="flex flex-col gap-1 items-start">
                <i class="bi bi-shield-check bg-green-300 text-xl px-2 py-1 rounded-full"></i>
                <p class="font-medium mb-2">Extra security</p>
                <p class="text-xs font-semibold">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard</p>
            </div>
        </div>
        <div>
            <div class="md:w-3/4 px-16 md:px-0 flex items-center justify-between mx-auto my-20">
                <div class="">
                    <h4 class="text-orange-600 md:text-2xl text-lg font-medium">Featured Place</h4>
                    <h2 class="md:text-4xl text-2xl font-semibold">You Might Like This</h2>    
                </div>
                <a href="/explore" class="bg-black hover:bg-neutral-900 transition-all text-white px-3 md:px-6 py-2 rounded-md text-xs md:text-sm font-medium flex items-center gap-1">See more <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="flex flex-col md:flex-row justify-around md:w-3/4 px-16 md:px-0 mx-auto gap-3">
                @foreach ($listings as $listing)
                    <div class="flex flex-col items-start shadow-md p-3 h-auto justify-between rounded-md shadow-black ">
                        <div class=" md:h-60 w-full rounded-md overflow-hidden flex justify-center items-center">
                            <img src="{{$listing->photo1 ? asset('storage/'.$listing->photo1) : '' }}" class="h-full w-full " alt="">
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
                            <div class="flex gap-2">
                                <p class="mr-4 text-xs md:text-base">Listed By</p>
                                <div class="md:w-10 md:h-10 w-7 h-7 rounded-full flex justify-center items-center overflow-hidden"><img src="{{$brokers->where('id',$listing->broker_id)->last()->profile_photo ? asset('storage/'.$brokers->where('id',$listing->broker_id)->last()->profile_photo) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}" class="h-full" alt=""></div>
                                <div class="text-sm">
                                    <p class="font-medium sm:text-base text-xs">{{$brokers->where('id',$listing->broker_id)->last()->name}}</p>
                                    <p class="text-xs">{{$brokers->where('id',$listing->broker_id)->last()->sales}} Sales</p>
                                </div>
                            </div>
                            <a href="/property/{{$listing->id}}" class="sm:px-6 px-4 py-2 bg-black hover:bg-neutral-900 transition-all text-white sm:text-sm text-xs font-medium rounded-md">Send offer</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="md:w-3/4 mx-auto my-20 flex  md:flex-row flex-col items-center md:items-start px-16 md:px-0 gap-3">
            <div class="flex flex-col md:items-start items-center pt-2 md:w-1/3 gap-8">
                <div class="space-y-2 self-start">
                    <p class="text-2xl font-medium text-orange-600">User reviews</p>
                    <h3 class="text-4xl font-semibold">What they say</h3>
                </div>
                <div class="flex -space-x-2">
                    <div class="w-14 h-14 rounded-full flex justify-center items-center overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="h-full" alt="">
                    </div>
                    <div class="w-14 h-14 rounded-full flex justify-center items-center overflow-hidden">
                        <img src="https://qph.cf2.quoracdn.net/main-qimg-134e3bf89fff27bf56bdbd04e7dbaedf.webp" class="h-full" alt="">
                    </div>
                    <div class="w-14 h-14 rounded-full flex justify-center items-center overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="w-full" alt="">
                    </div>
                    <div class="h-14 w-14 rounded-full bg-black flex items-center justify-center text-white">
                    +99
                    </div>
                </div>
                <p class="text-xs font-semibold w-1/2 text-gray-500">Whetjer you're looking for a new place to call home or just want to do a little remodeling on your current adobe, we'll make sure you find exactly what you want.</p>
                <a href="" class="bg-black hover:bg-neutral-900 transition-all py-2 px-6 text-sm font-semibold text-white rounded-md">Read all reviews </a>
            </div>
            <div class="md:w-1/3 h-3/4 flex flex-col items-start p-6 shadow-md justify-between shadow-black rounded-sm">
                <div class="flex justify-between w-full">
                    <div class="flex flex-col items-start">
                        <p class="text-lg font-medium">Averie Paul</p>
                        <p class="text-sm"><i class="bi bi-twitter"></i> @Averie_Paul</p>
                    </div>
                    <div class="h-16 w-16 flex justify-center items-center rounded-full overflow-hidden">
                        <img src="https://i.dailymail.co.uk/i/pix/2016/02/16/14/314904EC00000578-0-image-a-18_1455633650354.jpg" alt="">
                    </div>
                </div>
                <p class="flex gap-1"><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i> 5.0</p>
                <p class="text-xs font-semibold mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="md:w-1/3 flex flex-col gap-4">
                <div class="shadow-md p-6 shadow-black rounded-sm">
                    <div class="flex justify-between w-full">
                    <div class="flex flex-col items-start">
                        <p class="text-lg font-medium">Abraham</p>
                        <p class="text-sm"><i class="bi bi-twitter"></i> @Abraham</p>
                    </div>
                    <div class="h-16 w-16 flex justify-center items-center rounded-full overflow-hidden">
                        <img src="https://i.redd.it/lrjjyc9stku81.png" alt="">
                    </div>
                </div>
                <p class="flex gap-1"><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i> 4.9</p>
                <p class="text-xs font-semibold mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="shadow-md p-6 shadow-black rounded-sm">
                    <div class="flex justify-between w-full">
                        <div class="flex flex-col items-start">
                            <p class="text-lg font-medium">Sanaa</p>
                            <p class="text-sm"><i class="bi bi-twitter"></i> @Sanaa</p>
                        </div>
                        <div class="h-16 w-16 flex justify-center items-center rounded-full overflow-hidden">
                            <img src="https://yt3.googleusercontent.com/a1GggJZoWQDCW0Eme1bGlsof_F8SeubtEOEVFz33vVkoiMXpqIyweG6TMaNA8qjaqoOIp1DukA=s900-c-k-c0x00ffffff-no-rj" alt="">
                        </div>
                    </div>
                    <p class="flex gap-1"><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i><i class="bi bi-star-fill text-yellow-600"></i> 4.9</p>
                    <p class="text-xs font-semibold mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
