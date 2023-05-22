<x-layout>
    <x-manageNavbar/>
    <a href="/" class="absolute top-20 left-5 flex items-center text-sm font-medium gap-2"><i class="bi bi-box-arrow-in-left text-2xl"></i>Home</a>
    <div class="OutNavbar">
        <form action="/list-property" method="post" class="flex flex-col px-5 md:px-0 md:w-2/3 mx-auto py-5 gap-4" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="space-y-2 mb-2">
                <h3 class="font-semibold text-3xl text-center">List a New Property</h3>
                <p class="text-center">some dummy text</p>
            </div>
            <input type="hidden" name="broker_id" id="" value={{auth()->user()->id}}>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Title</label>
                <input class="outline-none border border-black p-2 rounded-md" type="text" value="{{old('title')}}" name="title" id="">
                @error('title')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Location</label>
                <input class="outline-none border border-black p-2 rounded-md" type="text" value="{{old('location')}}" name="location" id="">
                @error('location')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Size (<sub>m<sup>2</sup></sub>)</label>
                <input class="outline-none border border-black p-2 rounded-md" type="number" value="{{old('size')}}" name="size" id="">
                @error('size')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Rooms</label>
                <input class="outline-none border border-black p-2 rounded-md" type="number" value="{{old('rooms')}}" name="rooms" id="">
                @error('rooms')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Features</label>
                <textarea name="features" class="outline-none border border-black p-2 rounded-md" id="" cols="30" rows="5">{{old('features')}}</textarea>
                @error('features')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Photos</label>
                <div class="swiper-container overflow-hidden w-full relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-10 sm:px-20">
                            <p>Photo 1</p>
                            <input type="file" name="photo1" class="" value="{{old('photos')}}">
                        </div>
                        <div class="swiper-slide px-10 sm:px-20">
                            <p>Photo 2</p>
                            <input type="file" name="photo2" id="">
                        </div>
                        <div class="swiper-slide px-10 sm:px-20">
                            <p>Photo 3</p>
                            <input type="file" name="photo3" id="">
                        </div>
                        <div class="swiper-slide px-10 sm:px-20">
                            <p>Photo 4</p>
                            <input type="file" name="photo4" id="">
                        </div>
                        <div class="swiper-slide px-10 sm:px-20">
                            <p>Photo 5</p>
                            <input type="file" name="photo5" id="">
                        </div>
                    </div>
                    <div class="swiper-boton-next absolute top-2 z-50 right-5"><i class="bi hover:text-neutral-300 transition-all bi-arrow-right-circle-fill text-3xl"></i></div>
                    <div class="swiper-boton-prev absolute top-2 z-50 left-5"><i class="bi hover:text-neutral-300 transition-all text-3xl bi-arrow-left-circle-fill"></i></div>
                    <script>
                        var swiper = new Swiper('.swiper-container', {
                          navigation: {
                            nextEl: '.swiper-boton-next',
                            prevEl: '.swiper-boton-prev',
                          },
                        });
                        </script>
                </div>
                @error('photo1')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Information</label>
                <textarea name="information" class="outline-none border border-black p-2 rounded-md" id="" cols="30" rows="5">{{old('information')}}</textarea>
                @error('information')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Listing For</label>
                <select name="listingtype" id="" class="border border-black rounded-md p-2">
                    <option value="Rent">Rent</option>
                    <option value="Sell">Sell</option>
                </select>
                @error('price')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class='text-lg '>Price</label>
                <input class="outline-none border border-black p-2 rounded-md" type="number" value="{{old('price')}}" name="price" id="">
                @error('price')
                    <p class='text-red-700 text-sm'>{{$message}}</p>
                @enderror
            </div>
                <button class="w-2/3 bg-black hover:bg-neutral-900 transition-all py-3 rounded-md mx-auto font-medium text-white">List</button>
        </form>
    
    </div>
</x-layout>