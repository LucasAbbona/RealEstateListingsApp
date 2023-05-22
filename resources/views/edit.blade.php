<x-layout>
        <x-manageNavbar/>
        <form action="" method="post" class="flex flex-col w-full items-center py-5 gap-10" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="broker_id" value="{{$listing->broker_id}}" id="">
            <div class="w-full flex flex-col md:flex-row gap-5 justify-center">
                <div class="swiper-container md:w-1/2 flex flex-col items-center overflow-hidden relative">
                        <div class="swiper-wrapper relative">
                            <div class="swiper-slide">
                                <img src="{{$listing->photo1 ? asset('storage/'.$listing->photo1) : '' }}" alt="">
                                <input type="file" name="photo1" id="">
                                @error('photo1')
                                    <p class="text-red-600">{{$message}}</p>
                                @enderror
                            </div>
            
                                <div class="swiper-slide">
                                    <img src="{{$listing->photo2 ? asset('storage/'.$listing->photo2) : '' }}" alt="">
                                    <input type="file" name="photo2" id="">
                                </div>
            
                                <div class="swiper-slide">
                                    <img src="{{$listing->photo3 ? asset('storage/'.$listing->photo3) : '' }}" alt="">
                                    <input type="file" name="photo3" id="">
                                </div>
            
                                <div class="swiper-slide">
                                    <img src="{{$listing->photo4 ? asset('storage/'.$listing->photo4) : '' }}" alt="">
                                    <input type="file" name="photo4" id="">
                                </div>
            
                                <div class="swiper-slide">
                                    <img src="{{$listing->photo5 ? asset('storage/'.$listing->photo5) : '' }}" alt="">
                                    <input type="file" name="photo5" id="">
                                </div>
                        </div>
                        <script>
                            var swiper = new Swiper('.swiper-container', {
                              navigation: {
                                nextEl: '.swiper-boton-next',
                                prevEl: '.swiper-boton-prev',
                              },
                            });
                            </script>
                </div>
                <div class="md:w-1/3 flex-col flex gap-4">
                    <div class="flex flex-col px-5 md:px-0 md:pl-5">
                        <label for="" class="text-lg font-medium">Title</label>
                        <input type="text" name="title" id="" class="border border-black rounded-md p-1 outline-none" value="{{$listing->title}}">
                        @error('title')
                        <p class="text-red-600">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col pl-5">
                        <label for="" class="text-lg font-medium">Location</label>
                        <div>
                            <i class="bi bi-geo-alt-fill"></i>
                            <input type="text" name="location" id="" class="border border-black rounded-md p-1 outline-none" value="{{$listing->location}}">
                            @error('location')
                                <p class="text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-between px-5 mt-5">
                        <div class="flex gap-2">
                            <label for="" class="text-lg font-medium">Size</label>
                            <input type="number" name="size" id="" class="border border-black rounded-md p-1 outline-none w-20" value="{{$listing->size}}">
                            @error('size')
                                <p class="text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex gap-2">
                            <label for="" class="text-lg font-medium">Rooms</label>
                            <input type="number" name="rooms" id="" class="border border-black rounded-md p-1 outline-none w-20" value="{{$listing->rooms}}">
                            @error('rooms')
                                <p class="text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-between w-full px-5">
                        <div class="flex gap-2">
                            <label for="" class="text-lg font-medium">Type</label>
                            <select name="listingtype" id="" class="border border-black rounded-md p-1 outline-none">
                                <option value="Rent">Rent</option>
                                <option value="Sell" >Sell</option>
                            </select>
                            @error('listingtype')
                                <p class="text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex gap-2">
                            <label for="" class="text-lg font-medium">Price</label>
                            <input type="text" name="price" id="" class="border border-black rounded-md p-1 outline-none w-28" value="{{$listing->price}}">
                            @error('price')
                                <p class="text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-5 md:px-24 flex flex-col gap-3">
                <div>
                    <label for="" class="text-lg font-medium">Features</label>
                    <textarea name="features" id="" cols="30" rows="5" class="p-2 w-full border border-black rounded-md">{{$listing->features}}</textarea>    
                    @error('features')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="" class="text-lg font-medium">Information</label>
                    <textarea name="information" id="" cols="30" rows="5" class="p-2 w-full border border-black rounded-md">{{$listing->information}}</textarea>    
                    @error('information')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror   
                </div>
            </div>
            <div class="px-20 w-full">
                <button class="w-full py-3 rounded-md font-semibold text-lg bg-orange-500 text-white">Update</button>
            </div>
        </form>
</x-layout>