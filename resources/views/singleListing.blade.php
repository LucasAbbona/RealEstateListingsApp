<x-layout>
    <x-navbar/>
    <div class="OutNavbar md:w-3/4 px-5 md:px-0 flex flex-col items-center md:items-start mx-auto py-10 mb-10">
        <div class="flex flex-col md:flex-row justify-between gap-10  w-full">
            <div class="swiper-container relative w-full overflow-hidden">
                <div class="swiper-wrapper">
                        <img src='{{$listing->photo1 ? asset('storage/'.$listing->photo1) : '' }}' alt="" class='rounded-md h-full w-full swiper-slide'>
                        @if ($listing->photo2)
                        <img src='{{$listing->photo2 ? asset('storage/'.$listing->photo2) : '' }}' alt="" class='rounded-md h-full w-full swiper-slide'>
                        @endif
                        @if ($listing->photo3)
                        <img src='{{$listing->photo3 ? asset('storage/'.$listing->photo3) : '' }}' alt="" class='rounded-md h-full w-full swiper-slide'>
                        @endif
                        @if ($listing->photo4)
                        <img src='{{$listing->photo4 ? asset('storage/'.$listing->photo4) : '' }}' alt="" class='rounded-md h-full w-full swiper-slide'>
                        @endif
                        @if ($listing->photo5)
                        <img src='{{$listing->photo5 ? asset('storage/'.$listing->photo5) : '' }}' alt="" class='rounded-md h-full w-full swiper-slide'>
                        @endif
                    </div>
                <div class="swiper-boton-next absolute right-3 z-50 top-32"><i class="bi hover:text-neutral-300 transition-all bi-arrow-right-circle-fill text-3xl text-white"></i></div>
                <div class="swiper-boton-prev absolute left-3 z-50 top-32"><i class="bi hover:text-neutral-300 transition-all text-white text-3xl bi-arrow-left-circle-fill"></i></div>
            </div>
            {{--  --}}
              <script>
                var swiper = new Swiper('.swiper-container', {
                  navigation: {
                    nextEl: '.swiper-boton-next',
                    prevEl: '.swiper-boton-prev',
                  },
                });
                </script>
            {{--  --}}
            <div class="w-full flex flex-col">
                <p class="text-orange-600 font-bold text-sm">{{$listing->listingtype}}</p>
                <h3 class="text-3xl font-semibold">{{$listing->title}}</h3>
                <div class="mt-5 flex flex-col gap-3">
                    <p class="font-medium"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>
                    <p class=""><i class="bi bi-arrows-angle-expand"></i> {{$listing->size}}m<sup>2</sup></p>
                    <p><i class="bi bi-house"></i> {{$listing->rooms}} Rooms</p>
                </div>
                    <div class="self-end flex gap-3 mt-16">
                        <p class="text-xl self-end  font-medium">${{$listing->price}}</p>
                        <a href="/send-offer/{{$listing->id}}" class="bg-black px-6 py-2 text-sm font-semibold text-white rounded-md">Send Offer</a>
                    </div>
            </div>
        </div>
        <div class="mt-10 flex flex-col gap-6 w-full">
            <h2 class="text-2xl font-bold">More Details</h2>
            <div>
                <p class="text-xl font-medium"><i class="bi bi-info-square text-xl"></i> Features</p>
                <p>{{$listing->features}}</p>
            </div>
            <div>
                <p class="text-xl font-medium"><i class="bi bi-ticket-detailed"></i> More Information</p>
                <p>{{$listing->information}}</p>
            </div>
            <div class="flex flex-col gap-6">
                <p class="text-xl font-medium"><i class="bi bi-person-square"></i> Broker Information</p>
                <div class="flex  justify-around w-full">
                    <div>
                        <div class="h-20 w-20 rounded-full flex justify-center items-center overflow-hidden">
                            <img src="{{$profile->profile_photo ? asset('storage/'.$profile->profile_photo) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}" class="h-full" alt="">
                        </div>
                    </div>
                    <div class="text-sm font-medium flex flex-col gap-2">
                        <p>{{$profile->name}}</p>
                        <p>Experience: {{$profile->experience}} Years</p>
                        <p>Sales closed: {{$profile->sales}}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-lg font-medium">Contact</p>
                        <p class="text-sm"><i class="bi bi-linkedin"></i> {{$profile->linkedin}}</p>
                        <p class="text-sm"><i class="bi bi-telephone-fill"></i> +{{$profile->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>